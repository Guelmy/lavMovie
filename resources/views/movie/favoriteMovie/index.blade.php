@extends('layouts.app')

 @section('body')
 <button class="btn btn-primary rounded-circle"><a href="/favorite_movie/create" class="text-white">agregar</a></button>

        <div class="row">
            @foreach($fMovies as $movie)
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;; margin-top: 30px;">
                            <img style="height: 14rem; width: 15rem;" class="card-img-top" src="images/favorite/{{ $movie->poster }}" alt="">
                        <div class="card-body bg-dark" style="height: 60px;width: 15rem" >
                            <div class="card-title"><h4 class="text-white">{{ $movie->title }}</h4></div>
                       </div>
                       <div class="card-footer">
                            <div style="margin-top: 0px;"> 
                                    Imdb: {{ $movie->imdb_number }}
                                <br>Year: {{ $movie->year }}
                                {{ $movie }}
                            </div>  
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
