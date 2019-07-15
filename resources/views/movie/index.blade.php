@extends('layouts.app')

    @section('body')
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;; margin-top: 30px;">
                            <img style="height: 14rem; width: 15rem;" class="card-img-top" src="images/{{ $movie->poster }}" alt="">
                        <div class="card-body bg-dark" style="height: 60px;width: 15rem;" >
                            <div class="card-title"><h4 class="text-white">{{ $movie->title }}</h4></div>
                       </div>
                       <div class="card-footer">
                            <div style="margin-top: 0px;"> 
                                   Imdb: {{ $movie->imdb_number }}
                                <br>Year: {{ $movie->year }}
                            </div>  
                                
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
