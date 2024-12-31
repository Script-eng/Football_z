<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matchs;

class MatchsController extends Controller
{
    public function index()
    {
        $matchs = Matchs::all();
        return view('matches.index', compact('matchs'));
    }
}
