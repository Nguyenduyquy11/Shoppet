<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admins\Admincontroller;
use App\Http\Controllers\Clients\ThuCungController;
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
// Route::get('thu-cung/admin', ThuCungController::class)->name('thu-cung.admin');
Route::resource('thucung/admin', Admincontroller::class);
Route::resource('thucung/client', ThuCungController::class);
//Clients
// Route::resource('thu-cung', ThuCungController::class);

