<?php

namespace App\Http\Controllers\Api;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApinewController extends Controller
{
    //
    public function create_movie(){
        return view('create_movies');
    }
    public function store_movie12(Request $request){
        $movie=new Movie;
        $movie->movie_name=$request->movie_name;
        $movie->category=$request->category;
        $movie->actor_name=$request->actor_name;
        
        $movie->save();
    }
}
