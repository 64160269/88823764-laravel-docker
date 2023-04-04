<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
<<<<<<< HEAD
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check())
        {
            if (Auth::user()->emp_dep_id == 1)
            {
                return view('managerhome');
            }

            else if (Auth::user()->emp_dep_id == 2)
            {
                return view('suphome');
            }

            else if (Auth::user()->emp_dep_id == 3)
            {
                return view('userhome');
            }
        }
    }
}
=======
    public function show_home(Request $request){
        $data['em'] = $request->email;
        $data['pw'] = $request->password;

        return view('Show', $data);
    }};

>>>>>>> e81599feff887396e90198461ed039c74da78093
