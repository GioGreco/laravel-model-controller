@extends('layouts.app')

@section('main')


<div class="container p-5">
    <div class="row g-0">
        @forelse($movies as $key=>$movie)
            <a href="{{ route('movieDetails', ['id'=> $movie['id']]) }}" class="movie-card col-12 col-sm-6 col-md-4 col-lg-3 text-center px-5">
                <div>
                    <div class="movie-pic mb-2">
                        <img src="{{$movie['image']}}" alt="{{$movie['title']}} pic" class="w-100">
                        <div class="layover d-flex justify-content-center align-items-center">
                            <span class="d-block">See Plot</span>
                        </div>
                    </div>
                    <h4 class="movie-title">{{$movie['title']}}</h4>
                    <p class="movie-original-title">{{$movie['original_title']}}</p>
                    <div class="d-flex justify-content-around p-2">
                        <span class="nationality">{{$movie['nationality']}}</span>
                        <span class="date">{{$movie['date']}}</span>
                    </div>
                    <div class="rating">{{$movie['vote']}}</div>
                </div>
            </a>

        @empty
            <div>0 movies found!</div>
        @endforelse
    </div>
</div>
@endsection


{{-- {{Vite::asset('resources/img/placeholder.jpg')}} --}}
