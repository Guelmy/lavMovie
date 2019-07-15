<?php

namespace App\Http\Controllers;
use App\Movie;
use App\favoriteMovie;

use Illuminate\Http\Request;

class movieController extends Controller
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
    {   // verifying role
        if($request->user()->authorizeRole('admin')){
             $movies = Movie::orderBy('id','ASC')->paginate(6);
                  return view('movie.index')->with('movies', $movies);
        }else if($request->user()->authorizeRole('client')){
                 // $fMovies = favoriteMovie::orderBy('created_at','ASC')->paginate(6);
                     return redirect()->action('favoriteMovieController@index');
        }  

            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       return view("movie.upLoad");
    }    /**
     * Store a newly created resource in srage.
    
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('poster')){ //check if have file
            $file = $request->file('poster');
            $name = time().$file->getClientOriginalName(); //change name with time
            $file->move(public_path().'/images/',$name); //move the file to public/image
             
        }
       
        $movie = new movie;

        $movie->title = $request->input('title');
        $movie->year = $request->input('year');
        $movie->imdb_number = $request->input('imdb_number');
        $movie->poster = $name;
        $movie->save();

        return redirect()->action('movieController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        // $movies = Movie::find($id);

        return view('movie.index')->with('movies', $movie);
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

    public function getAll(){
        $movies = Movie::all();

        return $movies;
    }

    public function getTO($imdb_number){
        $movies = Movie::where('imdb_number',$imdb_number)->first();

        return $movies;
    }
}
