<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.transactions.index', [
            'transactions' => Transaction::all()
        ]);
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
        //
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
        if (isset($request->action)) {
            if ($request->action == 'done') {
                Transaction::where('id', $transaction->id)->update(['status' => 'done']);
            } else if ($request->action == 'cancel') {
                Transaction::where('id', $transaction->id)->update(['status' => 'canceled']);
            }
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function tracking(Request $request)
    {
        $transaction = null;

        if ($request->transaction_id && $request->email) {
            $transaction = Transaction::where('id', $request->transaction_id)->where('email', $request->email)->first();
        }

        return view('user.tracking', [
            'transaction' => $transaction,
        ]);
    }
}
