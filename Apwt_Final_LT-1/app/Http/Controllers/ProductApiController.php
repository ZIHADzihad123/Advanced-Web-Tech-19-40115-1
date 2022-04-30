<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductApiController extends Controller
{
    public function productget()
    {
        $clients = product::all();
        return $clients;
    }

    public function addproductpost(Request $request)
    {


        $student = new product();
        $student->name = $request->name;
        $student->image = $request->image;
        $student->price = $request->price;

        $student->save();

        return $student;
    }
}
