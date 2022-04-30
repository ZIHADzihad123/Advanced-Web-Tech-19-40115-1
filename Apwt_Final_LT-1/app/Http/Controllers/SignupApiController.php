<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signup;

class SignupApiController extends Controller
{
    public function signuppost(Request $request)
    {
       
        $student = new signup();
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->phone = $request->phone;
        $student->usertype = $request->usertype;
        $student->address = $request->address;
        $student->save();
        return $student;

     
    }
}
