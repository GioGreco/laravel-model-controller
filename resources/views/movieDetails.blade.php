@extends('layouts.app')

@section('main')
    <div class="movie-details">
        <div>
            <h2 class="title">{{ $currentMovie->toArray()[0]['title'] }}</h2>
        </div>
        <h5>plot:</h5>
        <div class="description">{{ $currentMovie->toArray()[0]['description'] }}</div>
    </div>
@endsection
