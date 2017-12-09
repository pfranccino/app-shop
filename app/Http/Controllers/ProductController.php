<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    public function welcome()
    {
        $products = Product::paginate(12);
        return view('welcome')->with(compact('products'));


    }

    public function index()
    {
      $products = Product::paginate(10);
      return view('admin.products.index')->with(compact('products'));
    }

    public function create()
    {

      return view('admin.products.create');
    }

    public function store(Request $request)
    {
      $product = new Product();
      $product->name = $request->input('name');
      $product->description = $request->input('description');
      $product->price = $request->input('price');
      $product->long_description = $request->input('long_description');
      $product->save();
      return redirect()->route('index');
    }

    public function edit($id)
    {
      $products = Product::find($id);
      return view('admin.products.edit')->with(compact('products'));
    }

    public function update(Request $request ,$id)
    {
      $product = Product::find($id);
      $product->name = $request->input('name');
      $product->description = $request->input('description');
      $product->price = $request->input('price');
      $product->long_description = $request->input('long_description');
      $product->save();
      return  redirect()->route('index');
        }


}
