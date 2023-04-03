<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginControler extends Controller
{
    public function login()
    {
    
            if(Auth::User()->emp_dep_id == 1){
                return view('homemanager'); 
            }else if(Auth::User()->emp_dep_id == 2){
                return view('homesup');
            }else if(Auth::User()->emp_dep_id == 3){
                return view('home');
            }
    }
}
