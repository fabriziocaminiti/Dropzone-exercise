<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function index()
   {
       return view('index');
   }

   public function store(Request $request)
   {
       Product::create([
           'price'=>$request->input('price'),
           'description'=>$request->input('description'),
           'name'=>$request->input('name'),
           'brand'=>$request->input('brand')
       ]);
       return redirect()->back()->with('message','complimenti dati inseriti correttamente');
   }
   public function show(Request $request, Product $product)
   {
       $products=Product::all();
       return view('show',compact('products'));
   }
   public function edit(Product $product)
   {
       $products=Product::all();
       return view('edit',compact('product'));
   }

   public function update(Request $request, Product $product)
   {
      $product->update($request->all());

      return redirect()->back()->with('message','I dati sono stati modificati');
   }
   public function uploadProductImage(Request $request, $id)
   {
       
        $filepath = $request->file('file')->store('public/product/images');
        $product = Product::find($id);
        $product->images()->create([
            'src' => $filepath
         ]); 
         
         return "ok";
   }
}
