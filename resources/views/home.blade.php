@extends('layouts.app')

@section('content')
    <h2>Home</h2>
    <div class="cards-container container">
        <div class="row row-cols-5 g-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card text-center bg-warning">
                        <img src="{{ $movie->image }}" alt="">
                        <p>{{ $movie->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
