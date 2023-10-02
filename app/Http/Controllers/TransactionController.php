<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.transaction.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.transaction.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
         $rule = [
            'product_id' => 'required|string',
            'payment_id' => 'required|string',
            'phone_number' => 'required|numeric',
            'total_price' => 'required|numeric',
            'payment_evidence' => 'numeric',
            'status.*' => 'image|file|max:1024|nullable'
        ];

        $validatedData = $request->validate($rule);

        // return $validatedData;

        $validatedData['ProductID'] = IdGenerator::generate([
            'table' => 'products',
            'field' => 'ProductID',
            'length' => 6,
            'prefix' => 'PR'
        ]);

        Products::create($validatedData);

        //image

        if ($request->hasFile('ProductPhotos')) {

            $ProductPhotos = $request->file('ProductPhotos');

            foreach ($ProductPhotos as $ProductPhoto) {
                $path = $ProductPhoto->store('product_photos');

                ProductPhotos::create([
                    'ProductID' => $validatedData['ProductID'],
                    'Image' => $path
                ]);

                // gw kira kan selama ini kalo mau masukkin data ke database harus pake $validatedData 
                // ternyata ga pake itu juga bisa asalkan formatnya sama associative array 
                // terus elemen di array itu harus punya key yang sama sama field di tablenya biar bisa dimasukkin
            }

            // $validatedData['Image'] = $request->file('ProductPhotos')->store('product_photos');
        }

        // jadi bisa pake $validaedData juga, kalo fieldnya gaada ya ga dimasukkin
        // ProductPhotos::create($validatedData);

        return redirect('/catalog');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
