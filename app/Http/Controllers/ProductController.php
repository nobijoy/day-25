<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Student;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $products;
    protected $product;


    public function index(){
        return view('product.add-product');
    }
    public function create(Request $request){
        $this->product =new Product();
        $this->product->name= $request->name;
        $this->product->category= $request->category;
        $this->product->brand= $request->brand;
        $this->product->price= $request->price;
        $this->product->description= $request->description;

        $image= $request->file('image');
        $imageName = $image->getClientOriginalName();
        $directory ='/product-image';
        $image->move($directory, $imageName);
        $url = $directory.$imageName;
        $this->product->image = $url;

        $this->product->save();
        return redirect()->back()->with('message','Product info save successfully.');
    }
    public function manage(){
        $this->products = Product::orderBy('id','desc')->get();

        return view('product.manage-product', ['products'=>$this->products]);
    }
    public function edit($id){
        $this->product = Product::find($id);
        return view('product.edit-product', ['product'=>$this->product]);
    }
    public function update(Request $request, $id){
        $this->product = Product::find($id);
        $this->product->name = $request->name;
        $this->product->category = $request->category;
        $this->product->brand = $request->brand;
        $this->product->price = $request->price;
        $this->product->description = $request->description;
        $this->product->save();
        return redirect('/manage-product')->with('message','product info updated successfully');
    }
    public function delete($id){
        $this->product = Product::find($id);
        $this->product->delete();
        return redirect('/manage-product')->with('message', 'product info deleted successfully');
    }

}
