@extends('layouts.app')

@section('content')
    <h1>Spectators</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Male</th>
                <th>Has Pass</th>
            </tr>
        </thead>
        <tbody>
            @foreach($spectators as $spectator)
                <tr>
                    <td>{{ $spectator->sname }}</td>
                    <td>{{ $spectator->male ? 'Yes' : 'No' }}</td>
                    <td>{{ $spectator->haspass ? 'Yes' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
