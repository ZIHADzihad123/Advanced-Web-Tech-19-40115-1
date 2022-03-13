<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmitted(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required|max:20',
            'password'=>'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'
            
        ],
        [
            'name.required'=>'Please put your name',
            'name.max'=>'Name must be less than 20 charcters',
            'password.required'=>'Please put your password',
            'password.regex'=>'Minimum eight characters, at least one uppercase letter, one lowercase    letter, one number and one special character'
        ]
    );
    }
}
