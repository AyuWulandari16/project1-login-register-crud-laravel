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

    public function ProductStore(Request $request) {
        // Validasi request, memastikan hanya mengizinkan file gambar
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Periksa apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Simpan file gambar ke direktori 'public/images'
            $imagePath = $request->file('image')->store('images', 'public');
    
            // Masukkan path gambar ke data produk
            $data = $request->all();
            $data['image'] = $imagePath;
    
            // Buat produk dalam database
            Product::create($data);
    
            return redirect()->route('product.view')->with('success', 'Product added successfully');
        } else {
            // Tambahkan pesan kesalahan jika tidak ada file gambar yang diunggah
            return redirect()->route('product.view')->with('error', 'Please upload an image');
        }
    }
    

    public function ProductEdit($id){
        $editData = Product::find($id); // mengambil data produk dari tabel produk berdasarkan ID yang diberikan
        return view('backend.Product.edit_Product', compact('editData'));
        // fungsi compact() mengirim variabel $editData ke dalam tampilan dengan nama "backend.Product.edit_Product".
    }

    public function ProductUpdate(Request $request,$id){
        $data=Product::find($id);
        $data->update($request->all());
        return redirect()->route('product.view')->with('success', 'product updated successfully');
    }
    
    public function ProductDelete($id){
        $deleteData = Product::find($id); 
        $deleteData->delete();
        return redirect()->route('product.view')->with('success', 'product deleted successfully');
    }

    public function ProductDetail(string $id){
        $product = Product::findOrFail($id);
        return view('backend.product.detail_product', compact('product'));
    }
}
