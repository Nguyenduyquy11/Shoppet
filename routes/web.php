<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admins\Admincontroller;
use App\Http\Controllers\Admins\ChucVuController;
use App\Http\Controllers\admins\DanhMucController;
use App\Http\Controllers\Admins\SanPhamController;
use App\Http\Controllers\Admins\TaiKhoanController;
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
    return view('clients.thucung.index');
});
//Admins
// Route::get('thucung/admin', ThuCungController::class)->name('thucung.admin');
// Route::resource('admin', Admincontroller::class);
// Route::resource('admin/sanpham', SanPhamController::class);
Route::resource('admindanhmuc', DanhMucController::class);
Route::resource('adminsanpham', SanPhamController::class);
Route::resource('admintaikhoan', TaiKhoanController::class);
Route::resource('adminchucvu', ChucVuController::class);
//Clients
Route::resource('thucung', ClientController::class);
