@extends('layouts.app')

@section('content')
    <h1>Edit Spectator</h1>

    <form action="{{ route('spectators.update', $spectator->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="sname">Name</label>
            <input type="text" name="sname" id="sname" class="form-control" value="{{ $spectator->sname }}" required>
        </div>

        <div class="form-group">
            <label for="male">Gender</label>
            <select name="male" id="male" class="form-control" required>
                <option value="1" {{ $spectator->male == 1 ? 'selected' : '' }}>Male</option>
                <option value="0" {{ $spectator->male == 0 ? 'selected' : '' }}>Female</option>
                <option value="-1" {{ $spectator->male == -1 ? 'selected' : '' }}>Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="haspass">Has Pass</label>
            <select name="haspass" id="haspass" class="form-control" required>
                <option value="1" {{ $spectator->haspass == 1 ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ $spectator->haspass == 0 ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Spectator</button>
    </form>
@endsection