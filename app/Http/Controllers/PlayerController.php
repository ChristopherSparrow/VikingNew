<?php

namespace App\Http\Controllers;
use app\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index() {
        $players = Player::all();
        return view('players.index', compact('players'));
    }
    
    public function store(Request $request) {
        $player = Player::create($request->all());
        return redirect()->route('players.index');
    }
    
}
