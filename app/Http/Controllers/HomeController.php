<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show_home(Request $request){
        $data['em'] = $request->email;
        $data['pw'] = $request->password;

        return view('Show', $data);
    }
}
