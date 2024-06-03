<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function viewPro(){
        // $products= Product::all();
        // return $products;
        $products = Product::select('*')->get();
        return view('view',compact('products'));
    }
    public function create()
    {
        return view('addProduct');
    }

    public function store(Request $request)
    {

        // return request;
        $validated = $request->validate([
            "name" =>"required|max:50|min:4|string",
            "qty"  =>"required|numeric|min:1",
            "price"=>"required|numeric|min:0",
            "discount"=>"required|numeric|min:0",
        ]);
        $name  = $request->name;
        $qty   = $request->qty;//$qty=$request("qty")
        $price = $request->price;
        $discount= $request->discount;

        // return $name.$qty.$price.$discount;

        Product::create([
            "name"=>$name,
            "qty"=>$qty,
            "price"=>$price,
            "dis"=>$discount,
        ]);
        return redirect("/addProduct")->with('success','Add Success');
    }


    public function edit($id)
    {
        $product=Product::select('*')->where('id','=',$id)->first();

        return view('update',compact('product'));
    //    $pro = Product::find($id);
    //    return $pro[0].$id;
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            "name" =>"required|max:50|min:4|string",
            "qty"  =>"required|numeric|min:1",
            "price"=>"required|numeric|min:0",
            "discount"=>"required|numeric|min:0",
        ]);
        $name  = $request->name;
        $qty   = $request->qty;//$qty=$request("qty")
        $price = $request->price;
        $discount= $request->discount;
        Product::where('id',$id)->update([
            "name"=>$name,
            "qty"=>$qty,
            "price"=>$price,
            "dis"=>$discount,

        ]);
        return redirect('/view')->with('updateSuccess','');
    }

    public function destroy(Request $request)
    {
        $id = $request->remove_id;

        Product::where('id',$id)->delete();
        return redirect('/view')->with('deleteSuccess','');
    }

    public function show(Request $request){
        $search = $request->search_query;
        $result = Product::select('*')->where('name','LIKE','%'.$search.'%')->get();

        return view("search",compact('result'));
    }
}
