<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spectator;

class SpectatorController extends Controller
{
    //
    public function index()
    {
        $spectators = Spectator::all();
        return view('spectators.index', compact('spectators'));
    }
}
