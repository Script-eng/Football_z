<?php


namespace App\Http\Controllers;

use App\Models\Matchs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MatchsController extends Controller
{
    public function index()
    {
        $matches = Matchs::all();
        return view('matches.index', compact('matches'));
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
        // $match->user_id = Auth::id();
        $match->save();

        return redirect()->route('matches.index')->with('success', 'Match created successfully!');
    }

    public function show($id)
    {
        $match = Matchs::findOrFail($id);
        return view('matches.show', compact('match'));
    }

    public function edit($id)
    {
        $match = Matchs::findOrFail($id);

        

        return view('matches.edit', compact('match'));
    }

    public function update(Request $request, $id)
    {
        $match = Matchs::findOrFail($id);

        

        $match->mdate = $request->mdate;
        $match->startsat = $request->startsat;
        $match->ticketprice = $request->ticketprice;
        $match->mtype = $request->mtype;
        $match->save();

        return redirect()->route('matches.index')->with('success', 'Match updated successfully!');
    }

    public function destroy($id)
    {
        $match = Matchs::findOrFail($id);

        // // Ensure user can delete only their own matches or admin can delete any
        // if ($match->user_id != Auth::id() && !Auth::user()->is_admin) {
        //     return redirect()->route('matches.index')->with('error', 'You are not authorized to delete this match.');
        // }

        $match->delete();

        return redirect()->route('matches.index')->with('success', 'Match deleted successfully!');
    }
}