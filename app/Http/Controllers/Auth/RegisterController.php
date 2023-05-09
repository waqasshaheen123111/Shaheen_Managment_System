<?php

namespace App\Http\Controllers\Auth;

use App\Mail\MyMail;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'profile_image' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // dd($data);
       
        // if(isset($data['profile_image'])){
        //     $file=$data['profile_image'];
        //     // dd($file->getClientOriginalExtension());
        //     $filename=time() .'.'. $file->getClientOriginalExtension();
        //     $file->move('uploads/users/',$filename);
        //     // dd($filename);
        //     // $category->image=$filename;
        //     // dd("ok");
           
            

        // }else{
        //     $filename ='acbs';
        // }
            // dd($filename);
            
        
       $users=  User::create([
         
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
           
            
            

        ]);

        $path=$data['profile_image']->store('uploads/users','public');
        $users->images()->create([
            'path'=>$path,
            'img'=>$data['profile_image']->hashName()
        ]);










       
        $email=$data['email'];
        $details = [
            'title' => 'Registration',
            'body' => 'You register in my website Successfully'
        ];
       
        Mail::to($email)->send(new MyMail($details));
       
       return $users;


    }
}
