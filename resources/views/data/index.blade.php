@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold text-blue-800">Data</h1>
    <p class="text-gray-700 mt-4">Explore the data for matches, entries, and spectators.</p>
    <div class="mt-8">
        <a href="{{ route('matches.index') }}" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-yellow-400">Matches</a>
    </div>
    <div class="mt-4">
        <a href="{{ route('entries.index') }}" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-yellow-400">Entries</a>
    </div>
    <div class="mt-4">
        <a href="{{ route('spectators.index') }}" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-yellow-400">Spectators</a>
    </div>
</div>
@endsection