<?php

namespace App\Http\Controllers\Admin;

use App\Models\Grade;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GradeTeacher;

class TeacherclassController extends Controller
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
        //
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
        return view('admin.classes.add_teacher_class',compact('teachers','class'));
        
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
        // dd($request);
        $class=Grade::find($id);

        // $gradTeahcer=GradeTeacher::where('teacher_id',$request->teacher_id)->where('class_id',$id)->first();
        // if(!empty($gradTeahcer)){
        //         $gradTeahcer->delete();
        // }
        // $insertgradTeahcer=new GradeTeacher;
        // $insertgradTeahcer->class_id=$id;

        // foreach ($request->teachers as $key => $value) {
        //     $gradTeahcer=GradeTeacher::where('teacher_id',$value)->where('class_id',$id)->first();
        //     if (!empty($gradTeahcer)) {
        //         $gradTeahcer->delete();
        //     }


        //     $insertgradTeacher=new GradeTeacher;
        //     $insertgradTeacher->teacher_id=$value;
        //     $insertgradTeacher->class_id=$id;

        //     $insertgradTeacher->save();


            
        // }
       
        // $insertgradTeahcer->save();
        $class->teachers()->detach($request->teachers);
        $class->teachers()->attach($request->teachers);

        return redirect('admin/classes')->with('message','Teacher Added Successfully');
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
    public function get_teachers($id){

        $class=Grade::find($id);
        return view('admin.classes.class_teachers',compact('class'));
    }
   
}
