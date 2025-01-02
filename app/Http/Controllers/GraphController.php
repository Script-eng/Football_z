<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraphController extends Controller
{
    public function index()
    {
        // Pie Chart: Gender Distribution of Spectators
        $genderData = DB::table('spectators')
            ->select(DB::raw('male, COUNT(id) as count'))
            ->groupBy('male')
            ->get();
        $genderLabels = $genderData->pluck('male')->map(function ($item) {
            return $item == 0 ? 'Female' : 'Male';
        });
        $genderCounts = $genderData->pluck('count');

        // Line Chart: Average Ticket Price Over Time
        $ticketPriceData = DB::table('matchs')
            ->select(DB::raw('DATE(mdate) as match_date, AVG(ticketprice) as avg_price'))
            ->groupBy('match_date')
            ->orderBy('match_date')
            ->get();
        $priceDates = $ticketPriceData->pluck('match_date');
        $averagePrices = $ticketPriceData->pluck('avg_price');

        // Stacked Bar Chart: Spectators with and without Passes by Gender
        $passData = DB::table('spectators')
            ->select(DB::raw('male, haspass, COUNT(id) as count'))
            ->groupBy('male', 'haspass')
            ->get();

        $maleWithPass = $passData->where('male', 1)->where('haspass', 1)->pluck('count')->first() ?? 0;
        $maleWithoutPass = $passData->where('male', 1)->where('haspass', 0)->pluck('count')->first() ?? 0;
        $femaleWithPass = $passData->where('male', 0)->where('haspass', 1)->pluck('count')->first() ?? 0;
        $femaleWithoutPass = $passData->where('male', 0)->where('haspass', 0)->pluck('count')->first() ?? 0;

        // Doughnut Chart: Match Type Distribution
        $matchTypeData = DB::table('matchs')
            ->select(DB::raw('mtype, COUNT(id) as count'))
            ->groupBy('mtype')
            ->get();
        $matchTypes = $matchTypeData->pluck('mtype');
        $matchCounts = $matchTypeData->pluck('count');

        return view('graph-page', [
            'genderLabels' => $genderLabels,
            'genderCounts' => $genderCounts,
            'priceDates' => $priceDates,
            'averagePrices' => $averagePrices,
            'maleWithPass' => $maleWithPass,
            'maleWithoutPass' => $maleWithoutPass,
            'femaleWithPass' => $femaleWithPass,
            'femaleWithoutPass' => $femaleWithoutPass,
            'matchTypes' => $matchTypes,
            'matchCounts' => $matchCounts,
        ]);
    }
}
