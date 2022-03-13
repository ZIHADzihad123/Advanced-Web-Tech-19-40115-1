<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationController extends Controller
{
    public function registration()
    {
        return view('registration');
    }

    public function registrationSubmitted(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required|max:20',
            'password'=>'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            'address'=>'required|max:20|min:5',
            'phone' => 'required|min:11|numeric',
            'email' => 'required|email'
        ],
        [
            'name.required'=>'Please input your name',
            'name.max'=>'Name must be less than 20 charcters',
            'password.required'=>'Please input your password',
            'password.regex'=>'Minimum eight characters, at least one uppercase letter, one lowercase    letter, one number and one special character',
            'address.required'=>'Please input your address',
            'address.required'=>'Please input your address',
            'phone.required'=>'Please input your phone',
            'email.required'=>'Please input your email',
        ]
    );
    }
}

