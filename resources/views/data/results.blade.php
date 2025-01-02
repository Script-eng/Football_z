@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold text-blue-800">Retrieved Data</h1>
    <table class="table table-bordered mt-4">
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
</div>
@endsection