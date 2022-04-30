<?php

namespace App\Http\Controllers;

use App\Models\signup;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexget()
    {
        return   view("index");
    }


    public function loginget()
    {
        return   view("login");
    }

   
}
