<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePromoRequest;
use App\Http\Requests\UpdatePromoRequest;
use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    //
    public function index()
    {
        $promos = Promo::paginate(5);
        return view('promos.index')->with('promos', $promos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('promos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePromoRequest $request)
    {
        $request->validate([
            'promo_code' => 'required',
            'discount' => 'required',
            'quantity' => 'required',
        ]);

        $input = $request->all();
        Promo::create($input);
        return redirect('/admin/promos')->with('success', 'Promo Added!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $promos = Promo::find($id);
        return view('promos.show')->with('promos', $promos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $products = Product::find($id);
        $promos = Promo::find($id);
        return view('promos.edit')->with('promos', $promos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePromoRequest $request, $id)
    {
        $promos = Promo::find($id);

        $request->validate([
            'promo_code' => 'required',
            'discount' => 'required',
            'quantity' => 'required',
        ]);

        $input = $request->all();
        $promos->update($input);
        return redirect('/admin/promos')->with('success', 'Promo Updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Promo::destroy($id);
        return redirect('/admin/promos')->with('success', 'Promo Deleted!!!');
    }
}
