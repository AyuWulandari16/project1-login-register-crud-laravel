<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function UserView() {
        $data['allDataUser']=User::all(); //menyimpan semua data user ke variabel allDataUser
        return view('backend.user.view_user', $data);

    }

    public function UserAdd() {
        return view('backend.user.add_user');
    }

    public function UserStore(Request $request) {
        // dd($request);
        $validateData=$request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);

        $data=new User();
        $data->name=$request->name; //name mengarah ke nama type yang ada di add_user.blade.php
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->save();
        return redirect()->route('user.view')->with('success', 'User added successfully');
    }

    public function UserEdit($id) {
        $editData= User::find($id);
        return view('backend.user.edit_user', compact('editData'));
    }

    public function UserUpdate(Request $request, $id) {
        $data=User::find($id);
        $data->name=$request->name; //name mengarah ke nama type yang ada di add_user.blade.php
        $data->email=$request->email;
        $data->save();
        return redirect()->route('user.view')->with('success', 'User updated successfully');    
    }

    public function UserDelete($id) {
        // Temukan data pengguna berdasarkan ID
        $user = User::find($id);
        // Periksa apakah pengguna ditemukan
        if ($user) {
            // Hapus pengguna
            $user->delete();
        }
        // Alihkan pengguna ke rute yang sesuai setelah penghapusan
        return redirect()->route('user.view')->with('success', 'User deleted successfully');
    }
}
