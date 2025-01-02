<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class GraphController extends Controller
{
    public function showGraph()
    {
        $data = DB::table('matchs')
            ->select('mtype', DB::raw('AVG(ticketprice) as avg_ticket_price'))
            ->groupBy('mtype')
            ->get();

        $matchTypes = $data->pluck('mtype');
        $avgTicketPrices = $data->pluck('avg_ticket_price');

        return view('graph-page', compact('matchTypes', 'avgTicketPrices'));
    }
}