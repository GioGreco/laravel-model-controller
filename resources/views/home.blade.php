@extends('layouts.app')

@section('main')
<h1>READY!</h1>
<ul>
    @forelse($movies as $key=>$movie)
        <li>{{ $movie }}</li>
    @empty

    @endforelse
</ul>
@endsection
