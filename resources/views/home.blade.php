@extends('layouts.app')

@section('content')
    <h2>Home</h2>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <img src="{{ $movie->image }}" alt="">
                <p>{{ $movie->title }}</p>
            </li>
        @endforeach
    </ul>
@endsection