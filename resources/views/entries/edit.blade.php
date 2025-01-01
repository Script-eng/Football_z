@extends('layouts.app')

@section('content')
    <h1>Edit Entry</h1>

    <form action="{{ route('entries.update', $entry->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="matchid">Match ID</label>
            <input type="number" name="matchid" id="matchid" class="form-control" value="{{ $entry->matchid }}" required>
        </div>

        <div class="form-group">
            <label for="spectatorid">Spectator ID</label>
            <input type="number" name="spectatorid" id="spectatorid" class="form-control" value="{{ $entry->spectatorid }}" required>
        </div>

        <div class="form-group">
            <label for="timestamp">Timestamp</label>
            <input type="time" name="timestamp" id="timestamp" class="form-control" value="{{ $entry->timestamp }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Entry</button>
    </form>
@endsection