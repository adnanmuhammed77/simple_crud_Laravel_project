<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function index(){
        return view('admin.productup');
    }
    
    public function store(Request $request)
    {
        $pro = new Product();
        $pro->name = $request->input('name');
        $pro->category_name = $request->input('cat_name');
        $pro->price = $request->input('price');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/services/', $filename);
            $pro->image = $filename;
        }
        $pro->save();
        return redirect()->back()->with('success', '<h1>Well Done</h1> <br> A new product is added.');
   
    }

    public function edit($id){
        $pro = Product::find($id);
        return view('admin.edit',compact('pro'));
    }
    public function update(Request $request,$id){
        $pro = Product::find($id);
        $pro->name = $request->input('name');
        $pro->category_name = $request->input('cat_name');
        $pro->price = $request->input('price');
        if($request->hasFile('image'))
        {
            $destination ='uploads/services/'.$pro->image;
            if(File::exists($destination))
            {
               File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/services/', $filename);
            $pro->image = $filename;
        }
        $pro->update();
        return redirect('productdetails')->with('success', '<h1>Well Done</h1> <br> product is updated.');

    }
    public function destroy($id){
        $pro = Product::find($id);
        $destination ='uploads/services/'.$pro->image;
        if(File::exists($destination))
        {
           File::delete($destination);
        }
        $pro->delete();
        return redirect()->back()->with('success', '<h1>Well Done</h1> <br> 1 product is delete.');


    }

};
