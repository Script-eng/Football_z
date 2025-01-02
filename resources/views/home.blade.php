@extends('layouts.app')

@section('content')
<div class="text-center bg-gray-100 py-12">
    <!-- Hero Section -->
    <div class="text-center">
        <h1 class="text-5xl font-extrabold text-blue-900">⚽ Welcome to Football World 🌍</h1>
        <p class="text-gray-700 mt-4 text-lg">Your one-stop destination for all things football. Dive into matches, explore spectator stats, and enjoy the beautiful game!</p>
        <div class="mt-8">
            <a href="/register" class="bg-blue-800 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-yellow-400 transition-all">🏟️ Get Started</a>
        </div>
    </div>

    <!-- Image Section -->
    <div class="mt-8">
        <img src="https://media.giphy.com/media/3o6ZsS3AdgUNtKj2PK/giphy.gif" alt="Football Celebration" class="mx-auto rounded-lg shadow-lg w-1/2">
    </div>

    <!-- Quick Links -->
    <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-4">
        <a href="{{ route('data.index') }}" class="bg-green-600 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-green-400 transition-all">
            📊 Explore Data
        </a>
        <a href="{{ route('graph-page') }}" class="bg-purple-600 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-purple-400 transition-all">
            📈 View Graphs
        </a>
        <a href="https://en.wikipedia.org/wiki/Football" class="bg-red-600 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-red-400 transition-all">
            🌟 About Football
        </a>
    </div>

    <!-- Fun Facts Section -->
    <div class="mt-16">
        <h2 class="text-3xl font-bold text-blue-900">🏆 Did You Know? 🏆</h2>
        <div class="mt-4 bg-yellow-100 px-6 py-4 rounded-lg text-gray-800 shadow-lg">
            <ul class="list-disc text-left mx-auto max-w-2xl">
                <li>Brazil has won the FIFA World Cup a record 5 times! 🏆</li>
                <li>Football is played by over 250 million players in more than 200 countries. 🌍</li>
                <li>The fastest goal in football history was scored just 2.4 seconds after kick-off! ⏱️</li>
                <li>Did you know Lionel Messi has scored over 700 career goals? 🐐</li>
            </ul>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="mt-12">
        <a href="https://www.manutd.com" class="bg-blue-800 text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-yellow-400 transition-all">Join the Football Community Today! ⚽</a>
    </div>
</div>
@endsection
