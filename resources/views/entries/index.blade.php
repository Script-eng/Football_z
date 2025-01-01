@extends('layouts.app')

@section('content')
    <h1>Entries</h1>

    <a href="{{ route('entries.create') }}" class="btn btn-primary">Create New Entry</a>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Match ID</th>
                <th>Spectator ID</th>
                <th>Timestamp</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entries as $entry)
                <tr>
                    <td>{{ $entry->matchid }}</td>
                    <td>{{ $entry->spectatorid }}</td>
                    <td>{{ $entry->timestamp }}</td>
                    <td>
                        <a href="{{ route('entries.edit', $entry->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('entries.destroy', $entry->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
