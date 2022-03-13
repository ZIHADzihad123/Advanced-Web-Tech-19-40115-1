<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function contactSubmitted(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required|max:20',
            'email' => 'required|email',
            'phone' => 'required|min:11|numeric',           
            'subject' => 'required|',
            'message' => 'required|'
        ],
        [
            'name.required'=>'Please input your name',
            'name.max'=>'Name must be less than 20 charcters',
            'email.required'=>'Please input your email',
            'phone.required'=>'Please input your phone',          
            'subject.required'=>'Please input your subject',
            'message.required'=>'Please input your message',
        ]
    );
    }
}
