@extends('layouts.app')

@section('content')
    <h1>Create New Match</h1>

    <form action="{{ route('matches.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="mdate">Match Date</label>
            <input type="date" name="mdate" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="startsat">Start Time</label>
            <input type="time" name="startsat" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="ticketprice">Ticket Price</label>
            <input type="number" step="0.01" name="ticketprice" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="mtype">Match Type</label>
            <input type="text" name="mtype" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Create Match</button>
    </form>
@endsection
