<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::paginate(5);
        return view('banners.index')->with('banners', $banners);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|url',
        ]);

        $input = $request->all();
        Banner::create($input);
        return redirect('/admin/banners')->with('success', 'Banner Added!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $banners = Banner::find($id);
        return view('banners.show')->with('banners', $banners);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $banners = Banner::find($id);
        return view('banners.edit')->with('banners', $banners);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, $id)
    {
        $banners = Banner::find($id);

        $request->validate([
            'name' => 'required',
            'image' => 'required|url',
        ]);

        $input = $request->all();
        $banners->update($input);
        return redirect('/admin/banners')->with('success', 'Banner Updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Banner::destroy($id);
        return redirect('/admin/banners')->with('success', 'Banner Deleted!!!');
    }
}
