<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::controller(AdminController::class)->group(function () {
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Cara 2
// Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
