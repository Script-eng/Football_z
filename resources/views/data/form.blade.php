
@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold text-blue-800">Retrieve Data</h1>
    <form action="{{ route('data.form') }}" method="GET" class="mt-8">
        @csrf




        <!-- Spectator Filter -->
        <div class="form-group mt-4">
            <label for="spectatorid">Spectator</label>
            <select name="spectatorid" id="spectatorid" class="form-control">
                <option value="">Select Spectator</option>
                @foreach($spectators as $spectator)
                    <option value="{{ $spectator->id }}" {{ request('spectatorid') == $spectator->id ? 'selected' : '' }}>
                        {{ $spectator->sname }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Timestamp Filter -->
        <div class="form-group mt-4">
            <label for="timestamp">Timestamp</label>
            <input type="time" name="timestamp" id="timestamp" class="form-control" value="{{ request('timestamp') }}">
        </div>

        <!-- Gender Filter -->
        <div class="form-group mt-4">
            <label>Gender</label>
            <div>
                <input type="radio" name="gender" value="1" {{ request('gender') == '1' ? 'checked' : '' }}> Male
                <input type="radio" name="gender" value="0" {{ request('gender') == '0' ? 'checked' : '' }}> Female
                <input type="radio" name="gender" value="-1" {{ request('gender') == '-1' ? 'checked' : '' }}> Other
            </div>
        </div>

        <!-- Match Type Filter -->
        <div class="form-group mt-4">
            <label for="mtype">Match Type</label>
            <select name="mtype" id="mtype" class="form-control">
                <option value="">Select Match Type</option>
                <option value="championship" {{ request('mtype') == 'championship' ? 'selected' : '' }}>Championship</option>
                <option value="cup" {{ request('mtype') == 'cup' ? 'selected' : '' }}>Cup</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Retrieve Data</button>
    </form>

    <h2 class="text-2xl font-bold text-blue-800 mt-8">Results</h2>

    <!-- Display Results -->
    @if($results->isEmpty())
        <p class="text-gray-500 mt-4">No results found for the selected filters.</p>
    @else
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Spectator ID</th>
                    <th>Spectator Name</th>
                    <th>Gender</th>
                    <th>Has Pass</th>
                    <th>Match ID</th>
                    <th>Match Date</th>
                    <th>Match Start Time</th>
                    <th>Ticket Price</th>
                    <th>Match Type</th>
                    <th>Entry Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $result)
                    <tr>
                        <td>{{ $result->spectatorid }}</td>
                        <td>{{ $result->spectator_name }}</td>
                        <td>{{ $result->gender == 1 ? 'Male' : ($result->gender == 0 ? 'Female' : 'Other') }}</td>
                        <td>{{ $result->has_pass == 1 ? 'Yes' : 'No' }}</td>
                        <td>{{ $result->matchid }}</td>
                        <td>{{ $result->match_date }}</td>
                        <td>{{ $result->match_start_time }}</td>
                        <td>{{ $result->ticketprice }}</td>
                        <td>{{ $result->match_type }}</td>
                        <td>{{ $result->entry_time }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
?>
