<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

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

    /*
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /*
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)

    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            print_r(Auth::user());
        }
        // $input = $request->all();

        // $this->validate($request,[
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);

        // if(auth()->attempt(array('email' => $input['email'],'password' => $input['password']))){
        //     // if(Auth::User()->emp_dep_id == '1'){
        //     //     return view('homemanager');
        //     // }else if(Auth::User()->emp_dep_id == '2'){
        //     //     return view('homesup');
        //     // }else if(Auth::User()->emp_dep_id == '3'){
        //     //     return view('home');
        //     // }
        //     return dd(Auth::User());

        // }else{
        //     return redirect()->route('login')->with('error',"name and password wrong.");
        // }
    }
}