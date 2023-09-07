<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
// use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function logout(Request $request)
    {
        // Auth::guard('web') untuk mengakses guard (pelindung) dengan nama 'web' yang
        // biasanya digunakan untuk mengelola otentikasi pengguna
        // Metode logout() digunakan untuk mengakhiri sesi (session) pengguna
        // dan menghapus data otentikasi user
        Auth::guard('web')->logout();

        // metode ini untuk menghapus atau menghentikan sesi pengguna secara efektif
        // langkah keamanan penting untuk mencegah pengguna sebelumnya yang telah keluar
        // untuk tetap memiliki akses ke sesi yang sudah tidak valid
        $request->session()->invalidate();
  
        //diarahkan ke halaman beranda
        return redirect('/');
    }   

    // CARA 2
    // public function logout() {
    //     Auth::logout();
    //     return Redirect()->route('login');
    // }
}
