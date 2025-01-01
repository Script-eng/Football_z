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

    public function create()
    {
        return view('entries.create');
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
        return view('entries.edit', compact('entry'));
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
