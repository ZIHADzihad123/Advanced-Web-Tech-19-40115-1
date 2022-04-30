<?php

namespace App\Http\Controllers;

use App\Models\signup;
use App\Http\Requests\StoresignupRequest;
use App\Http\Requests\UpdatesignupRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SignupController extends Controller
{
    public function signupget()
    {
        return   view("signup");
    }

    public function signuppost(Request $request)
    {
        $validate = $request->validate(
            [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required',
                'password' => 'required',
                'phone' => 'required',
                'usertype' => 'required',
                'address' => 'required',


            ]
        );

        $student = new signup();
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->phone = $request->phone;
        $student->usertype = $request->usertype;
        $student->address = $request->address;
        $student->save();

        $mail_data = [
            'recipient' => 'mushfiq1519@gmail.com',
            'fromEmail' => $request->email,
            'fromName' => $request->firstname,
            'subject' => $request->phone,
            'body' => $request->address

        ];

        Mail::send('emailtemplate', $mail_data, function ($message) use ($mail_data) {
            $message->to($mail_data['recipient'])
                ->from($mail_data['fromEmail'], $mail_data['fromName'])
                ->subject($mail_data['subject']);
        });


        $request->session()->flash('msg', 'Successfully Registered and email sent');
        return redirect(Route('signup'));
    }


    public function loginpost(Request $request)
    {
        $validate = $request->validate(
            [
                'email' => 'required',
                'password' => 'required',

            ]
        );

        $result = signup::where('email',    $request->email)
            ->where('password', $request->password)
            ->first();
           

        if ($result['usertype'] == 'customer') {
            $request->session()->put('firstname', $request->firstname);

            return redirect()->route('userdash');
        }
        if ($result['usertype'] == 'admin') {

            session()->put('email', $result->email);
            session()->put('password', $result->password);
            session()->put('phone', $result->phone);
            session()->put('address', $result->address);
            session()->put('firstname', $result->firstname);

            return redirect()->route('admindash');
        } else {
            $request->session()->flash('msg', 'invaild credentials');
            return redirect('login');
        }
    }


    public function logoutget()
    {

        session()->forget('email');
        return redirect()->route('index');
    }

    public function profileget()
    {

        return view('profile');
    }


    public function admindash()
    {

        return view("admin.admin");
    }
    public function crudget()
    {
        $clients = signup::all();
        return view("admin.userscrud", ['clients' => $clients]);
    }
    public function editget($id)
    {
        $clients = signup::find($id);
        return view('admin.useredit', ['clients' => $clients]);
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
        return redirect(Route('userscrud'));
    }
}
