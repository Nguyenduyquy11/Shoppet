<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admins\Admincontroller;
use App\Http\Controllers\admins\DanhMucController;
use App\Http\Controllers\Admins\SanPhamController;
use App\Http\Controllers\Clients\ClientController;
// use App\Http\Controllers\Admins\ThuCungController;


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

Route::get('/', function () {
    return view('welcome');
});
//Admins
// Route::get('thucung/admin', ThuCungController::class)->name('thucung.admin');

// Route::resource('admin', Admincontroller::class);


Route::resources([
    'admin/sanpham' => SanPhamController::class,
    'admin/danhmuc' => DanhMucController::class
]);
// Route::resource('admin/sanpham', SanPhamController::class);
//Clients
Route::resource('thucung', ClientController::class);
// Route::resource('admin/danhmuc', DanhMucController::class);
