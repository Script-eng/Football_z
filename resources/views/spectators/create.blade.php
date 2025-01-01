@extends('layouts.app')

@section('content')
    <h1>Create Spectator</h1>

    <form action="{{ route('spectators.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="sname">Name</label>
            <input type="text" name="sname" id="sname" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="male">Gender</label>
            <select name="male" id="male" class="form-control" required>
                <option value="1">Male</option>
                <option value="0">Female</option>
                <option value="-1">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="haspass">Has Pass</label>
            <select name="haspass" id="haspass" class="form-control" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Spectator</button>
    </form>
@endsection