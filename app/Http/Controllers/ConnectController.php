<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConnectController extends Controller
{
    // public function connect(Request $request)
    // {
    //     $this->validate($request, [
    //     'email'=> 'required|max:32',
    //     'password'=> 'required|max:32|min:8',
    //   ]);
    //   public function authenticate(Request $request)
    // {
        // $credentials = $request->only('email', 'password');
        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'emp_dep_id' => 2])) {
        //     return view('homesup');
        // }
        // return view('welcome');
 
        // if (Auth::attempt($credentials)) {
        //     // Authentication passed...
        //     return redirect()->intended('dashboard');
        // }
    // }
    //   if (Auth::attempt(['email'=>$request->email,'password'=>$request->password, 'emp_dep_id' => 2])) {
    //     $user = users::where('email','=',$request->email)->first();
    //     return view('/homesup');
    //   } 
    // return Auth::user()->emp_dep_id;
            // if(Auth::user()->emp_dep_id == 1){
            //     return view('homemanager'); 
            // }else if(Auth::user()->emp_dep_id == 2){
            //     return view('homesup');
            // }else if(Auth::user()->emp_dep_id == 3){
            //     return view('home');
            // }
            // /
            // * home()
            // * เข้าสู่หน้าหลัก โดยขึ้นอยู่กับประเภทของผู้ใช้
            // * @input : - 
            // * @output : หน้าหลักของผู้ใช้
            // * @author : Rawich Piboonsin 64160299
            // * @Create Date : 2023-03-11
            // */
            public function connect()
            {
                if (Auth::check())
                {
                    if (Auth::Users()->emp_dep_id == 1)
            
                        return view('homemanager');
                    }
        
                    else if (Auth::Users()->emp_dep_id == 2)    
                    {
                        return view('homesup');
                    }
        
                    else if (Auth::Users()->emp_dep_id == 3)
                    {
                        return view('home');
                    }
                }
            }
    
    // }
