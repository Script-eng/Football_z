@extends('layouts.app')

@section('content')
    <h1>Matches</h1>

    <a href="{{ route('matches.create') }}" class="btn btn-primary">Create New Match</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Match Date</th>
                <th>Start Time</th>
                <th>Ticket Price</th>
                <th>Match Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matchs as $match)
                <tr>
                    <td>{{ $match->mdate }}</td>
                    <td>{{ $match->startsat }}</td>
                    <td>{{ $match->ticketprice }}</td>
                    <td>{{ $match->mtype }}</td>
                    <td>
                        <a href="{{ route('matches.edit', $match->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('matches.destroy', $match->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this match?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
