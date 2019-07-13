<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\favoriteMovie;

class FavoriteMovieController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {    
            $fMovies = favoriteMovie::orderBy('created_at','ASC')->paginate(6);

                 return view('movie.favoriteMovie.index')->with('fMovies', $fMovies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie.favoriteMovie.upLoad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('poster')){ //check if have file
            $file = $request->file('poster');
            $name = time().$file->getClientOriginalName(); //change name with time
            $file->move(public_path().'/images/favorite/',$name); //move the file to public/image
        }
        // $user_id = $request->user()->id();
        $movie = new favoriteMovie;

        $movie->title = $request->input('title');
        $movie->year = $request->input('year');
        $movie->imdb_number = $request->input('imdb_number');
        $movie->poster = $name;
        $movie->user_id = 1;
        $movie->role_id = 1;
        $movie->save();

        return redirect()->action('favoriteMovieController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {   
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
