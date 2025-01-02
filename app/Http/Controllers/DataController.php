<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Matchs;
use App\Models\Spectator;

class DataController extends Controller
{

    public function index()
    {
        
        return view('data.index');
    }
    public function form(Request $request)
    {
        // Fetch data for form dropdowns
        $matches = Matchs::all();
        $spectators = Spectator::all();

        // Build the base query
        $query = DB::table('entries')
            ->join('matchs', 'entries.matchid', '=', 'matchs.id')
            ->join('spectators', 'entries.spectatorid', '=', 'spectators.id')
            ->select(
                'entries.spectatorid',
                'spectators.sname as spectator_name',
                DB::raw('CASE WHEN spectators.male = -1 THEN "Female" WHEN spectators.male = 0 THEN "Male" ELSE "Unknown" END AS gender'),
                'spectators.haspass as has_pass',
                'entries.matchid',
                'matchs.mdate as match_date',
                'matchs.startsat as match_start_time',
                'matchs.ticketprice',
                'matchs.mtype as match_type',
                'entries.timestamp as entry_time'
            );

        // Apply filters dynamically
        $filters = [
            'entries.matchid' => $request->matchid,
            'entries.spectatorid' => $request->spectatorid,
            'entries.timestamp' => $request->timestamp,
            'spectators.male' => $request->gender,
            'matchs.mtype' => $request->mtype,
        ];

        foreach ($filters as $column => $value) {
            if (!is_null($value) && $value !== '') {
                $query->where($column, $value);
            }
        }

        // Fetch the results
        $results = $query->get();

        // Return the view with data
        return view('data.form', compact('matches', 'spectators', 'results'));
    }
}
