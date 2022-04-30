<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signup;

class LoginApiController extends Controller
{
    function loginpost(Request $request){
        $result = signup::where('email',    $request->email)
            ->where('password', $request->password)
            ->first();

            if(!$result)
            {
                return ["message"=>"Email password not matched"];
            }
            return $result;
    }

    public function editProfile(Request $req)
    {
        $user = signup::where('id', $req->id)->first();
        return $user;
        //return view('pages.user.editProfile')->with('user',$user);
    }

   
}
