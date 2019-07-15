@extends('layouts.app')

   @section('body')
        <div class="row">
            @foreach($users as $user)
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;; margin-top: 30px;">
                            <img style="height: 14rem; width: 15rem;" class="card-img-top" src="images/1562909076images.png" alt="">
                        <div class="card-body bg-dark" style="height: 60px; width: 15rem;" >
                            <div class="card-title"><h4 class="text-white">{{ $user->first_name }}  {{$user->last_name }}</h4></div>
                       </div>
                       <div class="card-footer">
                            <div style="margin-top: 0px;"> 
                                    Age: {{ $user->age }}
                                <br>Email: {{ $user->email }}
                            </div><br>  
                              <button class="btn btn-primary"><a class="text-white" href="">show favorite movie</a></button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
    <!-- #end -->
