<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::paginate(5);
        return view('games.index')->with('games', $games);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|url',
        ]);

        $input = $request->all();
        Game::create($input);
        return redirect('game')->with('success', 'Game Added!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $games = Game::find($id);
        return view('games.show')->with('games', $games);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $games = Game::find($id);
        return view('games.edit')->with('games', $games);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, $id)
    {
        $games = Game::find($id);

        $request->validate([
            'name' => 'required',
            'image' => 'required|url',
        ]);

        $input = $request->all();
        $games->update($input);
        return redirect('game')->with('success', 'Game Updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Game::destroy($id);
        return redirect('game')->with('success', 'Game Deleted!!!');
    }
}
