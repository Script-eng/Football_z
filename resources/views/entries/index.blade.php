@extends('layouts.app')

@section('content')
    <h1>Entries</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Match ID</th>
                <th>Spectator ID</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entries as $entry)
                <tr>
                    <td>{{ $entry->matchid }}</td>
                    <td>{{ $entry->spectatorid }}</td>
                    <td>{{ $entry->timestamp }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
