<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Routing\Route;

class studentcontroller extends Controller
{
    public function databaseget()
    {
        $student = student::all();
        return $student;                       
    }
    
    public function homeget()
    {
     
        return   view("home");                       
    }
    
    public function loginget()
    {
     
        return   view("login");                       
    }
    

    public function loginpost(Request $request)
    {

        $result = student::where('email', $request->email)
            ->where('password', $request->password)

            ->first();

        if ($result['usertype'] == 'customer') {
            $request->session()->put('email', $request->email);

            return redirect()->route('userdash');
        }
        if ($result['usertype'] == 'admin') {
            $request->session()->put('email', $request->email);

            return redirect()->route('admindash');
        }

         else {
            $request->session()->flash('msg', 'invaild credentials');
            return redirect('signup');
        }
    }
    public function admindash()
    {

        return view("admin");

    }
    public function userdash()
    {

        return view("user");

    }

    public function logoutget()
    {

        session()->forget('email');
        return redirect()->route('login');
    }

    public function signupget()
    {
       return view("signup");                     
    }
    
    public function signuppost(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => 'required',
                'dob' => 'required',
                'email' => 'required'
            ]
        );   
        
        $student=new student();
        $student->name=$request->name;
        $student->dob=$request->dob;
        $student->email=$request->email;
        $student->usertype=$request->usertype;
        $student->password = $request->password;
        $student->save();
        return redirect(Route('signup'));


    }

    public function crudget()
    {
        $students=student::all();
        return view("crud",['students'=>$students]);
    }

    public function editget($id){
        $student=student::find($id);
        return view('edit',['student'=>$student]);
    }
    public function updatepost(request $request,$id){
        $student=student::find($id);
        $student->name = $request->name;
        $student->dob = $request->dob;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->usertype = $request->usertype;
        $student->save();
        return redirect(Route('crud'));
        
    }
    
    public function deleteget($id){
        $student = student::destroy($id);
        return redirect(Route('crud'));
    }
    
}
