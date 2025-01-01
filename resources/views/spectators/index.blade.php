@extends('layouts.app')

@section('content')
    <h1>Spectators</h1>

    <a href="{{ route('spectators.create') }}" class="btn btn-primary">Create New Spectator</a>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Has Pass</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($spectators as $spectator)
                <tr>
                    <td>{{ $spectator->sname }}</td>
                    <td>{{ $spectator->male == 1 ? 'Male' : ($spectator->male == 0 ? 'Female' : 'Other') }}</td>
                    <td>{{ $spectator->haspass == 1 ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('spectators.edit', $spectator->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('spectators.destroy', $spectator->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this spectator?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
