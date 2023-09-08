<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// menuju ke tampilan welcome pada saat mau login dan register
Route::get('/', function () {
    // file nya terdapat di resources/views/welcome.blade.php
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
        // return view('dashboard');
    })->name('dashboard');
});

// Cara 2
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Semua route untuk user
Route::prefix('users')->group(function() {
    Route::get('/view', [UserController::class,  'UserView'])->name('user.view'); 
    Route::get('/add', [UserController::class,  'UserAdd'])->name('user.add');   
    Route::post('/store', [UserController::class,  'UserStore'])->name('users.store');     
    Route::get('/edit/{id}', [UserController::class,  'UserEdit'])->name('users.edit');     
    Route::post('/update/{id}', [UserController::class,  'UserUpdate'])->name('users.update');     
    Route::get('/delete/{id}', [UserController::class,  'UserDelete'])->name('users.delete');
});

Route::prefix('products')->group(function(){
    Route::get('/view',[ProductController::class, 'ProductView'])->name('product.view');
    // rute yang mendefinisikan URL "/products/view".
    // Ketika URL ini diakses melalui metode HTTP GET,
    // ia akan memanggil metode ProductView dari controller "ProductController".
    // Nama rute ini adalah "product.view" sehingga Anda dapat menggunakan nama ini untuk mengarahkan pengguna ke URL ini.
    Route::get('/add',[ProductController::class, 'ProductAdd'])->name('product.add');
    Route::post('/store',[ProductController::class, 'ProductStore'])->name('products.store');
    Route::get('/edit/{id}',[ProductController::class, 'ProductEdit'])->name('products.edit');
    Route::post('/update/{id}',[ProductController::class, 'ProductUpdate'])->name('products.update');
    Route::get('/delete/{id}',[ProductController::class, 'ProductDelete'])->name('products.delete');
});