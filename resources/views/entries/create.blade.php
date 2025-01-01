@extends('layouts.app')

@section('content')
    <h1>Create Entry</h1>

    <form action="{{ route('entries.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="matchid">Match ID</label>
            <input type="number" name="matchid" id="matchid" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="spectatorid">Spectator ID</label>
            <input type="number" name="spectatorid" id="spectatorid" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="timestamp">Timestamp</label>
            <input type="time" name="timestamp" id="timestamp" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Entry</button>
    </form>
@endsection