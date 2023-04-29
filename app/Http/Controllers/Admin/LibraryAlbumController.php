<?php

namespace App\Http\Controllers\Admin;

use App\Models\AlbumCounter;
use App\Models\LibraryAlbum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LibraryAlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $library_id = $request->input('library_id');

        // generate a random album ID between 1 and 9999
        do {
            $random_album_id = rand(1, 9999);
        } while (LibraryAlbum::where('type_id', $library_id)->where('title', $random_album_id)->exists());
        
        $library_album = new LibraryAlbum;
        $library_album->type_id = $library_id;
        
        
        // Set the album title to the default
        $library_album->title = 'New Album ' . $random_album_id;
        
        // set the parent ID if present
        $parent_id = $request->input('parent_id');
        if ($parent_id) {
            $library_album->parent_id = $parent_id;
        }
        
        $library_album->save();
        
        $library_albums = LibraryAlbum::where('parent_id', null)
        ->where('type_id',$library_id)
        ->get();
        $html = (string) view('admin.partial.filemanager.library_default', compact('library_albums'));
        
        return response()->json([
            'status' => 200,
            'message' => 'Your Library Album added Successfully',
            'html' => $html
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function removeAlbum(Request $request){

       
        $id=$request->input('id');
        // $library_album=LibraryAlbum::find($id);

        // $library_album->delete();
        // $library_album_sub_album=LibraryAlbum::where('parent_id',$id)->delete();
        $child_records = LibraryAlbum::where('parent_id', $id)->get();

        // Delete the child records
        foreach ($child_records as $child) {
            $child->delete();
        }
        
        // Delete the parent record
        $parent_record = LibraryAlbum::findOrFail($id);
        $parent_record->delete();
        $library_albums=LibraryAlbum::where('parent_id',Null)->get();
        $html=(string)view('admin.partial.filemanager.library_default',compact('library_albums'));
        return response()->json([
            'status'=>200,
            'message'=>'Album Removed Successfully',
            'html'=>$html

        ]);
    }
    public function sub_album(Request $request){
        // dd($request->input('album_id'));
        $parent_id=$request->input('album_id');
        $library_id=$request->input('library_id');
        $library_albums=LibraryAlbum::whereNotNull('parent_id')
        ->where('parent_id',$parent_id)
        ->get();
        
        $html=(string)view('admin.partial.filemanager.sub_album',compact('library_albums','parent_id'));
        return response()->json([
            'status'=>200,
            'message'=>'Library Sub Album and files is dynamically showing',
            'html'=>$html,


        ]);


        



    }



    public function sub_album_create(Request $request){

        $library_id = $request->input('library_id');

        // generate a random album ID between 1 and 9999
        do {
            $random_album_id = rand(1, 9999);
        } while (LibraryAlbum::where('type_id', $library_id)->where('title', $random_album_id)->exists());
        
        $library_album = new LibraryAlbum;
        $library_album->type_id = $library_id;
        
        
        // Set the album title to the default
        $library_album->title = 'New Album ' . $random_album_id;
        
        // set the parent ID if present
        $parent_id = $request->input('parent_id');

        $parent_id = $request->input('parent_id');
        if ($parent_id) {
            $library_album->parent_id = $parent_id;
        }
        
        

        // Create the new library album
        $library_album->save();
        
        
        
        $library_albums=LibraryAlbum::whereNotNull('parent_id')
        ->where('parent_id',$parent_id)
        ->get();
        $html=(string)view('admin.partial.filemanager.sub_album_add',compact('library_albums','parent_id'));
        return response()->json([
            'status'=>200,
            'message'=>'Library Sub Album and files is dynamically showing',
            'html'=>$html,


        ]);
    }




}
