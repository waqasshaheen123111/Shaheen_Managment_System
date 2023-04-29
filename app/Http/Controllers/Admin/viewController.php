<?php

namespace App\Http\Controllers\Admin;

use Mail;
use App\Models\Grade;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\MyMail;

class viewController extends Controller
{
    //
  
    public function delete_subjects(Request $request,$id){
        // dd($id);
        // dd($request);
        // dd('ok');
        $class=Grade::find($id);
        $class->subjects()->detach($request->subject);
        return redirect()->back()->with('message','Subject Deleted Successfully');

    }
    public function get_subjects(Request $request){
        $class=Grade::find($request->id);
        return view('admin.classes.class_subject',compact('class'));
    }
    public function send_mail(){
        
    $details = [
        'title' => 'Registration',
        'body' => 'You register in my website Successfully'
    ];
   
    Mail::to('waqasshaheen123111@gmail.com')->send(new MyMail($details));
   
    dd("Email is Sent.");

    }
    public function movie(){
        return view('api.first_api');
    }
}
