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
        // Tampilan ini adalah tampilan form atau halaman yang digunakan untuk memasukkan data produk baru.
        // Dengan kata lain, jika pengguna ingin menambahkan produk baru, mereka akan diarahkan ke tampilan ini
        return view('backend.product.add_product');
    }

    public function ProductStore(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
        ]);
         
        $data = new Product(); // membuat objek baru dari model "Product" 
        $data->title=$request->title; // Mengisi atribut "title" dengan nilai yang diterima dari pengguna.
        $data->price=$request->price;
        $data->product_code=$request->product_code;
        $data->description=$request->description;
        $data->save();

        return redirect()->route('product.view')->with('info','Tambah Product Berhasil');    
    }

    public function ProductEdit($id){
        $editData = Product::find($id); // mengambil data produk dari tabel produk berdasarkan ID yang diberikan
        return view('backend.Product.edit_Product', compact('editData'));
        // fungsi compact() mengirim variabel $editData ke dalam tampilan dengan nama "backend.Product.edit_Product".
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
