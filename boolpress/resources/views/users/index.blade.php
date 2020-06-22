@extends('layouts.main')
@section ('main-content')
    <h2>Blog archive</h2>

    <!-- @dump($users) -->
    @foreach ($users as $user)
        <div class="user">
        <img src="{{ $user->info['avatar'] }}" alt="{{ $user->name }}">
        <h2>{{ $user->name }}</h2>
        <small>{{ $user->created_at }}</small>
            <h3> {{ $user->email }} </h3>
            <div>{{ $user->info['address']}}</div>
            <div>{{ $user->info['phone'] }}</div>
            {{-- @dump($user->info) --}}
            {{-- @dump($user->info()) --}}
        </div>
        @if (! $loop->last)
            <hr>
        @endif

    @endforeach

@endsection
