<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Payment;
use Illuminate\Http\Request;

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
}
