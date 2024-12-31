<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function index()
    {
        $matches = Matchs::all();
        return view('matches.index', compact('matches'));
    }
}
