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
    public function create()
    {
        return view('matches.create');
    }

    public function store(Request $request)
    {
        $match = new Matchs();
        $match->mdate = $request->mdate;
        $match->startsat = $request->startsat;
        $match->ticketprice = $request->ticketprice;
        $match->mtype = $request->mtype;
        $match->user_id = Auth::id(); // Add user_id for ownership
        $match->save();

        return redirect()->route('matches.index');
    }

    public function edit($id)
    {
        $match = Matchs::findOrFail($id);

        // Ensure user can edit only their own matches or admin can edit any
        if ($match->user_id != Auth::id() && !Auth::user()->is_admin) {
            return redirect()->route('matches.index');
        }

        return view('matches.edit', compact('match'));
    }

    public function update(Request $request, $id)
    {
        $match = Matchs::findOrFail($id);

        // Ensure user can update only their own matches or admin can update any
        if ($match->user_id != Auth::id() && !Auth::user()->is_admin) {
            return redirect()->route('matches.index');
        }

        $match->mdate = $request->mdate;
        $match->startsat = $request->startsat;
        $match->ticketprice = $request->ticketprice;
        $match->mtype = $request->mtype;
        $match->save();

        return redirect()->route('matches.index');
    }

    public function destroy($id)
    {
        $match = Matchs::findOrFail($id);

        // Ensure user can delete only their own matches or admin can delete any
        if ($match->user_id != Auth::id() && !Auth::user()->is_admin) {
            return redirect()->route('matches.index');
        }

        $match->delete();

        return redirect()->route('matches.index');
    }
}
