@extends('layouts.app')

    @section('title','Movie List')

        @foreach($movies as $movies)
            @section('body')
                <div class="card-image-top">
                    <img src="images/{{ $movies->poster }}" alt="">
                </div>
                <div class="card-title">
                    {{ $movies->title }}
                </div>
                {{ $movies}}
            @endsection
        @endforeach