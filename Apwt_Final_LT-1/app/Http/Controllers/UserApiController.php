<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signup;
class UserApiController extends Controller
{
    public function getuser(){
        $result = signup::all();
        if ($result) {
            return response()->json($result, 200);
        }
    }

    public function updatepost(Request $request, $id)
    {
        $clients = signup::find($id);
        $clients->firstname = $request->firstname;
        $clients->lastname = $request->lastname;
        $clients->email = $request->email;
        $clients->password = $request->password;
        $clients->phone = $request->phone;
        $clients->usertype = $request->usertype;
        $clients->address = $request->address;
        $clients->save();
        return redirect(Route('userscrud'));
    }


    public function deleteget($id)
    {
        $clients = signup::destroy($id);
        return $clients;
    }
}
