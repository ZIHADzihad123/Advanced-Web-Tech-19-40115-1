<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task_1_Controller extends Controller
{
    public function home(){
        return view('page/index/landingPage');
    }

    public function service(){
        $products=array("Sandwitch", "Burger", "Peanut","Peanut");
        return view('product/service')->with('products', $products);
    }

    public function ourTeams(){
        $names=array("Mr. Zihad", "Mr. Faysal", "Mr. Jamil");
        return view('ourTeams')->with('names', $names);
    }

    public function aboutUs(){
        return view('aboutUs');
    }

    public function contactUs(){
        return view('contactUs');
    }
}
