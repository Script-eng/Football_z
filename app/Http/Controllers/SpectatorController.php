<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpectatorController extends Controller
{
    //
    public function index()
    {
        $spectators = Spectator::all();
        return view('spectators.index', compact('spectators'));
    }
}
