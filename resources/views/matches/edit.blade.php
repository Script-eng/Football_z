@extends('layouts.app')

@section('content')
    <h1>Edit Match</h1>

    <form action="{{ route('matches.update', $match->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="mdate">Match Date</label>
            <input type="date" name="mdate" class="form-control" value="{{ $match->mdate }}" required>
        </div>

        <div class="form-group">
            <label for="startsat">Start Time</label>
            <input type="time" name="startsat" class="form-control" value="{{ $match->startsat }}" required>
        </div>

        <div class="form-group">
            <label for="ticketprice">Ticket Price</label>
            <input type="number" step="0.01" name="ticketprice" class="form-control" value="{{ $match->ticketprice }}" required>
        </div>

        <div class="form-group">
            <label for="mtype">Match Type</label>
            <input type="text" name="mtype" class="form-control" value="{{ $match->mtype }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Match</button>
    </form>
@endsection

