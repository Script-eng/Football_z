<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;
use App\Models\Matchs;
use App\Models\Spectator;

class EntryController extends Controller
{
    //
    public function index()
    {
        $entries = Entry::all();
        return view('entries.index', compact('entries'));
    }

    public function create()
    {
        $matches = Matchs::all();
        $spectators = Spectator::all();
        return view('entries.create', compact('matches', 'spectators'));
    }

    public function store(Request $request)
    {
        $entry = new Entry();
        $entry->matchid = $request->matchid;
        $entry->spectatorid = $request->spectatorid;
        $entry->timestamp = $request->timestamp;
        $entry->save();

        return redirect()->route('entries.index')->with('success', 'Entry created successfully!');
    }

    public function edit($id)
    {
        $entry = Entry::findOrFail($id);
        $matches = Matchs::all();
        $spectators = Spectator::all();
        return view('entries.edit', compact('entry', 'matches', 'spectators'));
    }

    public function update(Request $request, $id)
    {
        $entry = Entry::findOrFail($id);
        $entry->matchid = $request->matchid;
        $entry->spectatorid = $request->spectatorid;
        $entry->timestamp = $request->timestamp;
        $entry->save();

        return redirect()->route('entries.index')->with('success', 'Entry updated successfully!');
    }

    public function destroy($id)
    {
        $entry = Entry::findOrFail($id);
        $entry->delete();

        return redirect()->route('entries.index')->with('success', 'Entry deleted successfully!');
    }

}
