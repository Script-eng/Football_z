@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            @if(auth()->check())
                <h1 class="text-2xl font-bold">
                    Welcome, {{ auth()->user()->name }}!
                </h1>
                <p class="mt-4">
                    @if(auth()->user()->hasRole('admin'))
                        You are logged in as an Admin.
                    @elseif(auth()->user()->hasRole('user'))
                        You are logged in as a User.
                    @else
                        You are logged in as a Guest.
                    @endif
                </p>
            @else
                <p>Please log in to see personalized content.</p>
            @endif
        </div>
    </div>
</div>
@endsection
