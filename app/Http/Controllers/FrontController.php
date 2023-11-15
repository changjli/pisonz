<?php

namespace App\Http\Controllers;

use App\Mail\TransactionMail;
use App\Models\Banner;
use App\Models\Game;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Promo;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Netflie\WhatsAppCloudApi\WhatsAppCloudApi;

class FrontController extends Controller
{
    public function home()
    {
        return view('user.index', [
            'games' => Game::all(),
            'banners' => Banner::all(),
        ]);
    }

    public function order(Game $game)
    {
        return view('user.order', [
            'game' => $game->load(['Category']),
            'payments' => Payment::all(),
        ]);
    }

    public function payment(Request $request)
    {
        $rules = [
            'user_id' => 'required',
            'user_nickname' => 'required',
            'product' => 'required',
            'payment' => 'required',
            'email' => 'required_without:phone',
            'phone' => 'required_without:email'
        ];

        if ($request->promo) {
            $rules['promo'] = 'exists:promos,promo_code';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        return view('user.payment', [
            'user_id' => $request->user_id,
            'user_nickname' => $request->user_nickname,
            'product' => Product::with('Category')->where('id', $request->product)->first(),
            'payment' => Payment::where('id', $request->payment)->first(),
            'promo' => Promo::where('promo_code', $request->promo)->first(),
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
    }

    public function receipt(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'payment_evidence' => 'required|image|file|max:1024',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if ($request->file('payment_evidence')) {
            // $payment_evidence = $request->file('payment_evidence')->store('payment-evidence-images');

            // unique folder 
            $imageId = uniqid();

            // store image 
            Storage::disk('google')->put($imageId, $request->file('payment_evidence'));

            // get file from unique folder
            $file = Storage::disk('google')->files($imageId);

            // get file link 
            $payment_evidence = Storage::disk('google')->url($file[0]);
        }

        $total = $request->total;
        if ($request->promo) {
            $discount = Promo::where('promo_code', $request->promo)->first();
            $total = $total - $total * $discount;
        }

        $transaction = Transaction::create([
            'user_id' => $request->userId,
            'user_nickname' => $request->userNickname,
            'product_id' => $request->product,
            'payment_id' => $request->payment,
            'email' => $request->email,
            'phone' => $request->phone,
            'total' => $total,
            'payment_evidence' => $payment_evidence,
            'status' => 'pending',
        ]);

        if ($request->email != '') {
            // email
            try {
                Mail::to($request->email)->send(new TransactionMail($transaction));
            } catch (Exception $e) {
                dd($e->getMessage());
            }
        } else if ($request->phone != '') {
            // whatsapp
            $whatsapp_cloud_api = new WhatsAppCloudApi([
                'from_phone_number_id' => '169238152938139',
                'access_token' => 'EAADCOFsQlbEBOyqBcf1Abkefk6GkRP96HZC0oNGKyy2BZBgq4SL8yPxFpM1s2hSTnlhkZA0oscNNO4xCj7KLOT6J4s6qDtmyB8bPGvnF8OjuvNAZAi2Hhg1DX09HECqPsHP0DDRkAw7GDs8ZBwBfevYsSMp7ZClNYKJBfCufjmDTkyZBJZAd8TE8VZAFT5WQRVzt0efYRuKhS0xmwYqXm5slITqP44zQZD',
            ]);
            try {
                $whatsapp_cloud_api->sendTextMessage($request->phone, 'hello world');
            } catch (Exception $e) {
                dd($e->getMessage());
            }
        }

        return view('user.receipt', [
            'transaction' => $transaction,
        ]);
    }
}
