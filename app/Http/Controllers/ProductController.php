<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function index(){
        $products = Product::all();
       return view('products.index',compact('products')); 
    }
    public function create(){
        $categories= Category::orderBy('order','asc')->get();
        return view('products.create',compact('categories'));
    }
    
    public function store(Request $request){
    $data = $request->validate([
        'name'             => 'required|string|max:255',
        'price'            => 'required|numeric|min:0',
        'description'      => 'required|string',
        'discounted_price' => 'nullable|numeric|min:0',
        'stock'            => 'required|integer|min:0',
        'category_id'      => 'required|exists:categories,id',
        'photopath'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('photopath')) {
        $file = $request->file('photopath');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images/products'), $filename);
        $data['photopath'] = 'images/products/' . $filename;
    }

    Product::create($data);

    return redirect()->route('products.index')->with('success', 'Product created successfully!');

    }



    public function edit($id){
        $categories= Category::orderBy('order','asc')->get();
        $product= Product::find($id);
        return view('products.edit',compact('product','categories'));
    }
    public function update(Request $request,$id){
        $data = $request->validate([
        'name'             => 'required|string|max:255',
        'price'            => 'required|numeric|min:0',
        'description'      => 'required|string',
        'discounted_price' => 'nullable|numeric|min:0',
        'stock'            => 'required|integer|min:0',
        'category_id'      => 'required|exists:categories,id',
        'photopath'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
    ]);
        $product= Product::find($id);
        $product-> update($data);
        return redirect()->route('products.index')->with('success','Product Updated Succesfully');
    }
    public function destroy($id){
        $product= Product::find($id) ->delete();
       return redirect()->route('products.index')->with('success','Product Deleted Succesfully');
    }
}
