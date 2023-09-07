<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ProductView(){
        $data['allDataProduct']=Product::all();
        return view('backend.product.view_product', $data);
    }

    public function ProductAdd(){
        return view('backend.product.add_product');
    }

    public function ProductStore(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
        ]);
         
        $data = new Product();
        $data->title=$request->title;
        $data->price=$request->price;
        $data->product_code=$request->product_code;
        $data->description=$request->description;
        $data->save();

        return redirect()->route('product.view')->with('info','Tambah Product Berhasil');    
    }

    public function ProductEdit($id){
        $editData = Product::find($id);
        return view('backend.Product.edit_Product', compact('editData'));
    }

    public function ProductUpdate(Request $request,$id){
        $data=Product::find($id);
        $data->title=$request->title;
        $data->price=$request->price;
        $data->product_code=$request->product_code;
        $data->description=$request->description;
        $data->save();

        return redirect()->route('product.view')->with('info','Edit Product Berhasil');
    }
    
    public function ProductDelete($id){
        $deleteData = Product::find($id); 
        $deleteData->delete();
        return redirect()->route('product.view')->with('info','Delete Product Berhasil');
    }
}
