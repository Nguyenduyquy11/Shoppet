<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admins\Admincontroller;
use App\Http\Controllers\Admins\ChucVuController;
use App\Http\Controllers\Admins\LienHeController;
use App\Http\Controllers\admins\DanhMucController;
use App\Http\Controllers\Admins\SanPhamController;
use App\Http\Controllers\Clients\ClientController;
use App\Http\Controllers\Admins\BinhLuanController;
use App\Http\Controllers\Admins\TaiKhoanController;
use App\Http\Controllers\Clients\CartClientController;
use App\Http\Controllers\Clients\LienHeClientController;
use App\Http\Controllers\Clients\ClientSanPhamController;
use App\Http\Controllers\Clients\NguoiDungClientController;

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


//Auth
Route::get('login', [AuthController::class, 'showFormLogin']);
Route::post('login', [AuthController::class, 'Login'])->name('login');
Route::get('register', [AuthController::class, 'showFormRegister']);
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

//Admins
Route::middleware('auth', 'auth.admin')->prefix('admin')->as('admin.')->group(function () {
    Route::prefix('dasboard')->as('dasboard')->group(function () {
        Route::get('/', function(){
            $title = 'Trang admin';
            return view('layouts.admin', ['title' => $title]);
        });
    });
    Route::prefix('danhmuc')->as('danhmuc.')->group(function(){
        Route::get('/list', [DanhMucController::class, 'index'])->name('index');
        Route::get('/create', [DanhMucController::class, 'create'])->name('create');
        Route::post('/store', [DanhMucController::class, 'store'])->name('store');
        Route::get('/show/{id}', [DanhMucController::class, 'show'])->name('show');
        Route::get('{id}/edit', [DanhMucController::class, 'edit'])->name('edit');
        Route::put('{id}/update', [DanhMucController::class, 'update'])->name('update');
        Route::delete('{id}/destroy', [DanhMucController::class, 'destroy'])->name('destroy');
    });
    Route::prefix('sanpham')->as('sanpham.')->group(function(){
        Route::get('/list', [SanPhamController::class, 'index'])->name('index');
        Route::get('/create', [SanPhamController::class, 'create'])->name('create');
        Route::post('/store', [SanPhamController::class, 'store'])->name('store');
        Route::get('/show/{id}', [SanPhamController::class, 'show'])->name('show');
        Route::get('{id}/edit', [SanPhamController::class, 'edit'])->name('edit');
        Route::put('{id}/update', [SanPhamController::class, 'update'])->name('update');
        Route::delete('{id}/destroy', [SanPhamController::class, 'destroy'])->name('destroy');
    });
    Route::prefix('taikhoan')->as('taikhoan.')->group(function(){
        Route::get('/list', [TaiKhoanController::class, 'index'])->name('index');
        Route::get('/create', [TaiKhoanController::class, 'create'])->name('create');
        Route::post('/store', [TaiKhoanController::class, 'store'])->name('store');
        Route::get('/show/{id}', [TaiKhoanController::class, 'show'])->name('show');
        Route::get('{id}/edit', [TaiKhoanController::class, 'edit'])->name('edit');
        Route::put('{id}/update', [TaiKhoanController::class, 'update'])->name('update');
        Route::delete('{id}/destroy', [TaiKhoanController::class, 'destroy'])->name('destroy');
    });
    Route::prefix('chucvu')->as('chucvu.')->group(function(){
        Route::get('/list', [ChucVuController::class, 'index'])->name('index');
        Route::get('/create', [ChucVuController::class, 'create'])->name('create');
        Route::post('/store', [ChucVuController::class, 'store'])->name('store');
        Route::get('/show/{id}', [ChucVuController::class, 'show'])->name('show');
        Route::get('{id}/edit', [ChucVuController::class, 'edit'])->name('edit');
        Route::put('{id}/update', [ChucVuController::class, 'update'])->name('update');
        Route::delete('{id}/destroy', [ChucVuController::class, 'destroy'])->name('destroy');
    });
    Route::prefix('lienhe')->as('lienhe.')->group(function(){
        Route::get('/list', [LienHeController::class, 'index'])->name('index');
        // Route::get('/create', [LienHeController::class, 'create'])->name('create');
        // Route::post('/store', [LienHeController::class, 'store'])->name('store');
        // Route::get('/show/{id}', [LienHeController::class, 'show'])->name('show');
        Route::get('edit/{id}', [LienHeController::class, 'edit'])->name('edit');
        Route::put('{id}/update', [LienHeController::class, 'update'])->name('update');
    });
    Route::prefix('binhluan')->as('binhluan.')->group(function(){
        Route::get('/list', [BinhLuanController::class, 'index'])->name('index');
        Route::delete('{id}/destroy', [BinhLuanController::class, 'destroy'])->name('destroy');
 
    });
});

//Client
Route::get('/', [ClientSanPhamController::class, 'SanPhamHome'])->name('/');
Route::get('/timkiem', [ClientSanPhamController::class, 'timKiemSanPham'])->name('/timkiem');
Route::get('sanphamdanhmuc/{id}', [ClientSanPhamController::class, 'sanPhamDanhMuc'])->name('sanphamdanhmuc');
Route::get('chitiet/{id}', [ClientSanPhamController::class, 'chiTietSanPham'])->name('chitiet');
Route::post('binhluan', [ClientSanPhamController::class, 'binhLuan'])->name('binhluan');
//Cart
Route::get('/giohang', [CartClientController::class, 'listCart'])->name('giohang');
Route::post('/themvaogiohang', [CartClientController::class, 'addToCart'])->name('themvaogiohang');
Route::delete('/xoacart/{id}', [CartClientController::class, 'deleteCart'])->name('xoacart');
//Liên hệ
Route::get('/lienhe', [LienHeClientController::class, 'lienHe'])->name('/lienhe');
Route::post('/guilienhe', [LienHeClientController::class, 'guiLienHe'])->name('addlienhe');
//Người dùng
Route::get('/nguoidung/{id}', [NguoiDungClientController::class, 'formDeTailUser'])->name('/nguoidung');
Route::get('/formcapnhat/{id}', [NguoiDungClientController::class, 'formUpdateUser'])->name('/formcapnhat');
Route::put('/capnhat/user/{id}', [NguoiDungClientController::class, 'updateUser'])->name('/capnhat.nguoidung');


