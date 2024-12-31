@extends('layouts.app')

@section('content')
    <h1>Matches</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Match Date</th>
                <th>Start Time</th>
                <th>Ticket Price</th>
                <th>Match Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matchs as $match)
                <tr>
                    <td>{{ $match->mdate }}</td>
                    <td>{{ $match->startsat }}</td>
                    <td>{{ $match->ticketprice }}</td>
                    <td>{{ $match->mtype }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection