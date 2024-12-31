<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    //
    public function index()
    {
        $entries = Entry::all();
        return view('entries.index', compact('entries'));
    }
}
