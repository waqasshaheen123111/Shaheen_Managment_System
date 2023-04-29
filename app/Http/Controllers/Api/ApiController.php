<?php

namespace App\Http\Controllers\Api;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MovieResource;

class ApiController extends Controller
{
    //
    public function create_movie(){
        return view('create_movies');
    }
    public function store_movie12(Request $request){
        $input=$request->all();
        $movie=new Movie;
        $movie->fill($input);
        $movie->save();
        return response()->json(['message'=>"save",'status'=>200],200);
    }

    public function get_movie(){

        $data=Movie::get();
        // dd($data);
        $data= MovieResource::collection($data);
        return response()->json([
            'data'=>$data,
            'message'=>"save",'status'=>200],200);


    }
}
