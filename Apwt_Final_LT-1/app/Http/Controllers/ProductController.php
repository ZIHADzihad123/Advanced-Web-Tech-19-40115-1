<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productget()
    {
        $clients = product::all();
        return view("admin.productcrud", ['clients' => $clients]);
    }

    public function deleteget($id)
    {
        $products = product::destroy($id);
        return redirect(Route('product'));
    }
    public function addproductget()
    {
        
        return view('admin.addproduct');
    }

    public function addproductpost(Request $request)
    {
        

        $student = new product();
        $student->name = $request->name;
        $student->image = $request->image;
        $student->price = $request->price;
        
        $student->save();
        
        return redirect(Route('product'));
    }

}
