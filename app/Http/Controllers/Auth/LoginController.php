<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    
    /**
     * Where to redirect users after login.
     *
     * @var string
     * */
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function authenticated(){
    
        if (Auth::check()) {
            // $ab=(request()->ip() == '127.0.0.1')?'39.37.152.205':request()->ip() ;
            // // dd($ab);
            // // dd($ab);
           
            // $res = Http::get('https://www.iplocate.io/api/lookup/'.$ab.'');

            // $res = json_decode($res);
            // $latitude=$res->latitude;
            // $longitude=$res->longitude;
            // dd($res);
            if(Auth::user()->role==1) {
                return redirect('admin/dashboard')->with('message','Welcome to Admin Dashboard');
            }
            else if(Auth::user()->role==0){
                return redirect('/home')->with('message','login Successfull');
            }
        }
        
        else{
            return redirect('/')->with('message','Please Login first');
        }
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * 
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
