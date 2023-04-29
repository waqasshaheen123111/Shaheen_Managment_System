<?php

namespace App\Http\Controllers\Admin;

use App\Models\Grade;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $classes=Grade::all();
        return view('admin.classes.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teachers=Teacher::where('status','1')->get();
        return view('admin.classes.create',compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $class=new Grade;
        $class->name=$request->name;
        $class->groups=$request->group;
        $class->save();
        $class->teachers()->attach($request->teacher_id);
        return redirect('admin/classes')->with('message','Class Added Successfully');
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
        $teachers=Teacher::where('status','1')->get();
        $class=Grade::find($id);
        return view('admin.classes.edit',compact('class','teachers'));
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
        $class=Grade::find($id);
        $class->name=$request->name;
        $class->teachers()->detach($request->teachers);
        $class->groups=$request->group;
        $class->update();
        return redirect('admin/classes')->with('message','Class Update Successfully');
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
        $class=Grade::find($id);
        $class->delete();
        return redirect('admin/classes')->with('message','Class Deleted Successfully');
    }
}
