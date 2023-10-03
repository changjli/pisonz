<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Game;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return view('categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $games = Game::all();
        return view('categories.create', compact('games'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'game_id' => 'required',
        ], [
            'game_id.required' => 'Game must be selected'
        ]);

        $input = $request->all();
        Category::create($input);
        return redirect('category')->with('success', 'Category Added!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categories = Category::find($id);
        return view('categories.show')->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // $categories = Category::find($id);
        $games = Game::all();
        return view('categories.edit', compact('category', 'games'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'game_id' => 'required',
        ], [
            'game_id.required' => 'Game must be selected'
        ]);

        $input = $request->all();
        $category->update($input);
        return redirect('category')->with('success', 'Category Updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect('category')->with('success', 'Category Deleted!!!');
    }
}
