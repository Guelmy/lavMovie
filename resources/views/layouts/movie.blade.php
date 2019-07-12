@extends('layouts.app')

@section('title', 'Upload')

@section('body')
    <form action="/movie" method="POST" enctype="multipart/form-data">
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
@endsection