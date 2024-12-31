@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold text-blue-800">Welcome to Football World</h1>
    <p class="text-gray-700 mt-4">Your one-stop destination for all things football. Explore matches, entries, and spectators!</p>
    <div class="mt-8">
        <a href="/register" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-yellow-400">Get Started</a>
    </div>
</div>
@endsection