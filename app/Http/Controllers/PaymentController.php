<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::paginate(5);
        return view('payments.index')->with('payments', $payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('payments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentRequest $request)
    {
        $request->validate([
            'method' => 'required',
            'account_number' => 'required',
            'account_name' => 'required',
        ]);

        $input = $request->all();
        Payment::create($input);
        return redirect('payment')->with('success', 'Payment Added!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $payments = Payment::find($id);
        return view('payments.show')->with('payments', $payments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $payments = Payment::find($id);
        return view('payments.edit')->with('payments', $payments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, $id)
    {
        $payments = Payment::find($id);

        $request->validate([
            'method' => 'required',
            'account_number' => 'required',
            'account_name' => 'required',
        ]);

        $input = $request->all();
        $payments->update($input);
        return redirect('payment')->with('success', 'Payment Updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Payment::destroy($id);
        return redirect('payment')->with('success', 'Payment Deleted!!!');
    }
}
