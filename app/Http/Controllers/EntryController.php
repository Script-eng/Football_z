<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class EntryController extends Controller
{
    //
    public function index()
    {
        $entries = Entry::all();
        return view('entries.index', compact('entries'));
    }
}
