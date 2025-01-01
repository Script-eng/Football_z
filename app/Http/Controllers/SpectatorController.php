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
    public function create()
    {
        return view('spectators.create');
    }
    public function store(Request $request)
    {
        $spectator = new Spectator();
        $spectator->sname = $request->sname;
        $spectator->male = $request->male;
        $spectator->haspass = $request->haspass;
        $spectator->save();

        return redirect()->route('spectators.index')->with('success', 'Spectator created successfully!');
    }
    public function edit($id)
    {
        $spectator = Spectator::findOrFail($id);
        return view('spectators.edit', compact('spectator'));
    }

    public function update(Request $request, $id)
    {
        $spectator = Spectator::findOrFail($id);
        $spectator->sname = $request->sname;
        $spectator->male = $request->male;
        $spectator->haspass = $request->haspass;
        $spectator->save();

        return redirect()->route('spectators.index')->with('success', 'Spectator updated successfully!');
    }

    public function destroy($id)
    {
        $spectator = Spectator::findOrFail($id);
        $spectator->delete();

        return redirect()->route('spectators.index')->with('success', 'Spectator deleted successfully!');
    }


}
