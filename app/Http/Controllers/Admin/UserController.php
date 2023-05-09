<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Mail\MyMail;
use App\Models\User;
use App\Models\Grade;
use App\Models\Image;
use App\Models\Parents;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\UserRequestForm;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $users=User::all();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents=Parents::all();
        $classes=Grade::all();
        $students=Student::all();
        return view('admin.user.create-user',compact('students','classes','parents'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request1,UserRequestForm $request)
    {
    //    dd($request1);
    // dd($request->all());
        // dd($request->class);
        $data=$request->validated();
        // dd($data);
        // dd($data);

        $users=new User;
        $users->name=$data['name'];
        
        $users->email=$data['email'];
        $users->password=Hash::make($data['password']);
        $users->adress=$data['address'];
        $users->mobile=$data['mobile'];
        $date=Carbon::parse($data['date']);
        $users->dob=$date;


        // dd($request->file('image'));
        
        
       
       
        $users->role=$data['role'];
        if ($data['role']=='0') {
            $email_role='User';
        }
        elseif($data['role']=='2'){
            $email_role='Student';
        }
        elseif($data['role']=='3'){
            $email_role='Teacher';
        }
        elseif($data['role']=='4'){
            $email_role='Parent';
        }
        // dd($data);
        // dd($data['role']);
        // dd($data['name']);
        $users->save();
        if ($users->role=='3') {
            $teacher=new Teacher;
            $teacher->user_id=$users->id;
            $teacher->save();
        }
        if ($users->role=='2') {
            
            $student=new Student;
            $student->user_id=$users->id;
            $student->class_id=$request->class;
            $student->save();

            
            // $user_parent=new User;
            // $user_parent->name=$request->parent_name;
            // $user_parent->email=$request->parent_email;
            // $user_parent->password=$request->parent_password;
            // $user_parent->save();
        }
        if ($users->role=='4') {
            
            $parents=new Parents;
            $parents->user_id=$users->id;
            $parents->save();
        }
        

        
            foreach ($request->dp as $image1 ) {
                // dd('ok');
                // Storage::disk('public')->put('avatars/1', $image1);
                $path = $image1->store('uploads/users','public');
                
                $users->images()->create([
                    'img' => $image1->hashName(),
                    'path' => $path
                    
                    
                ]);
                
             
            }
                
            $email=$data['email'];
            $details = [
                'title' => 'Registration',
                'body' => 'You are Successfully register as '.$email.' in My Website'
            ];
           
            Mail::to($email)->send(new MyMail($details)); 

                // dd('done');

     

        return redirect('admin/users')->with('message','users Added Successfully');
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
        $parents=Parents::all();
        $classes=Grade::all();
        $students=Student::all();
        $user=User::find($id);
        return view('admin.user.edit',compact('user','classes','students','parents'));
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
        // dd($request->all());
        $user=User::find($id);
        if ($user) {
            $user->name=$request->name;
        
        $user->email=$request->email;
       
        $date=$request->date;
        // dd($date);
        $user->dob=$date;
        $user->mobile=$request->mobile;
        $user->adress=$request->address;


       
       



        // dd($request->file('image'));
       
        
                if($request->hasfile('dp')){
                 



                     if($user->images->count() >0){
                        // dd($user->images);
            // print_r($user->images);
            // dd('this has an images');
            // dd('ok');

            // $id=88;
            // $images1=Image::find($id);
            // dd($images1);
            foreach ($user->images as $image) {


                // dd($image->path);



                $path = $image->path;

                // check if file exists in the disk
                if (Storage::disk('public')->exists($path)) {
                   
                    Storage::disk('public')->delete($path);
                }


               
               $image->delete();
               
                // dd('ok');
                
            }
            // dd('ok');?
        }
            

        foreach ($request->dp as $image1 ) {
            // dd('ok');
            // Storage::disk('public')->put('avatars/1', $image1);
            $path = $image1->store('uploads/users','public');
            
            $user->images()->create([
                'img' => $image1->hashName(),
                'path' => $path
                
                
            ]);
            
         
        }
                    
                    

                } 


                $user->role=$request->role;
                $user->update();
                if ($user->role=='2') {
                    
                    $student=$user->student;
                    $student->user_id=$user->id;
                    $student->class_id=$request->class;
                    $student->update();
                }
                if ($user->role=='4') {
                    
                    $parents=$user->parents;
                    $parents->user_id=$user->id;
                    $parents->student_id=$request->student;
                    $parents->update();   
                }
                return redirect('admin/users')->with('message','Users Updated Successfully');
        }
        else{
            return redirect()->back()->with('message','Requested Id not Found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
       $user_id=$id;
        $user=User::find($user_id);
        
        
        if ($user) {
            
            // dd($images);
            foreach ($user->images as $key => $value) {
                
                $destination='uploads/users/'.$value->img;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                // $value->delete();
                $value->delete();
                
            }
            
            $user->delete();
            if ($user->role=='3') {
                $teacher=Teacher::where('user_id',$user_id)->first();
                $teacher->delete();

            }
            if ($user->role=='2') {

                $student=Student::where('user_id',$user_id)->first();
                dd($student->parents->students);
                $student->delete();

            }
            if ($user->role=='4') {
                $parent=Parents::where('user_id',$user_id)->first();
                $parent->delete();

            }
            return redirect()->back()->with('message','User Deleted Successfully');

        }
        else{
            return redirect()->back()->with('message','Requested Id not found');
        }
    }

    public function get_parents(Request $request){
        
        $user_parent=new User;
        $user_parent->name=$request->name;
        $user_parent->email=$request->email;
        $user_parent->password=Hash::make($request->password);
        $user_parent->role=$request->role;
        $user_parent->save();
        
        $image=new Image;
        $file=$request->file('dp');
        $filename=time().microtime().'.'.$file->getClientOriginalExtension();
        // dd($filename);
        $file->move('uploads/users/',$filename);
        $image->user_id=$user_parent->id;
        $image->img=$filename;
        $image->save();

        if ($user_parent->role=='4') {
            $parents=new Parents;
            $parents->user_id=$user_parent->id;
            $parents->save();
        }
        $parents = Parents::all();

         $html=(string)view("admin.partial.parents",compact('parents'));
        //  dd($html);
         return response()->json([
            'status'=>200,
            'message'=>' Your Parent added Successfully please submit your further Form',
            'html' => $html
        ]);
        
    }
  
        

    

    public function create_parents(){
        return view('admin.user.add-parents');
    }
    public function endpoints(){
        dd('ok');
    }
    public function form_submit(){
        return view('random_form');
    }


    public function grid_view(Request $request){
        // dd($request->all());
        $users=$request->input('users');
        $html=(string)view('admin.user.index2',compact('users'));
        return response()->json([
            'html'=>$html,
            'status'=>200,
        ],200);
        
    }
    


    public function get_user($id){
        // dd($id);

        $user=User::find($id);
        // dd($user);
        return view('admin.user.view_user',compact('user'));






    }
  
        
    
}
