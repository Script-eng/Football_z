@extends('layouts.app')

@section('content')
    <h1>Edit Entry</h1>

    <form action="{{ route('entries.update', $entry->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="matchid">Match</label>
            <select name="matchid" id="matchid" class="form-control" required>
                @foreach($matches as $match)
                    <option value="{{ $match->id }}" {{ $match->id == $entry->matchid ? 'selected' : '' }}>
                        {{ $match->mdate }} - {{ $match->mtype }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="spectatorid">Spectator</label>
            <select name="spectatorid" id="spectatorid" class="form-control" required>
                @foreach($spectators as $spectator)
                    <option value="{{ $spectator->id }}" {{ $spectator->id == $entry->spectatorid ? 'selected' : '' }}>
                        {{ $spectator->sname }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="timestamp">Timestamp</label>
            <input type="time" name="timestamp" id="timestamp" class="form-control" value="{{ $entry->timestamp }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Entry</button>
    </form>
@endsection