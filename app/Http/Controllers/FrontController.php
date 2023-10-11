<?php

namespace App\Http\Controllers;

use App\Mail\TransactionMail;
use App\Models\Game;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function home()
    {
        return view('user.index', [
            'games' => Game::all(),
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
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'user_nickname' => 'required',
            'product' => 'required',
            'payment' => 'required',
            'email' => 'required|email:dns',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        return view('user.payment', [
            'user_id' => $request->user_id,
            'user_nickname' => $request->user_nickname,
            'product' => Product::with('Category')->where('id', $request->product)->first(),
            'payment' => Payment::where('id', $request->payment)->first(),
            'email' => $request->email,
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
            $payment_evidence = $request->file('payment_evidence')->store('payment-evidence-images');
        }

        $transaction = Transaction::create([
            'user_id' => $request->userId,
            'user_nickname' => $request->userNickname,
            'product_id' => $request->product,
            'payment_id' => $request->payment,
            'email' => $request->email,
            'payment_evidence' => $payment_evidence,
            'status' => 'pending',
        ]);

        // email
        try {
            Mail::to($request->email)->send(new TransactionMail($transaction));
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return view('user.receipt', [
            'transaction' => $transaction,
        ]);
    }
}
