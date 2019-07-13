@extends('layouts.app')

@section('title', 'Upload')

@section('body')
    <div class="row">
            <div class="col-md-4">
            
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-dark">
                        <div class="card-title"><h1 class="text-white">@yield('title')</h1></div>
                    </div>
                    <div class="card-body">
                        <form action="@yield('url')" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="title" placeholder="input title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Year</label>
                                    <input type="date" name="year" placeholder="input year" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">IMDB number</label>
                                    <input type="text" name="imdb_number" placeholder="input imdb" class="form-control" required>
                                </div>
                                <div class="custom-file">
                                    <label for="" class="custom-file-label">Poster</label>
                                    <input type="file" name="poster" placeholder="file" class="custom-file-input" required>
                                </div>
                                <div class="form-group p-1">
                                     @yield('button')
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            
            </div>
        </div>
@endsection