<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showFormLogin(){
        $title = "Đăng nhập";
        return view('auth.login', compact('title'));
    }
    public function Login(Request $request){
        $user = $request->only('email', 'password');
        // dd($user);
        if(Auth::attempt($user)){
            return redirect()->route('/');
        }
        return redirect()->back()->withErrors([
            'email' => 'Thông tin người dùng không tồn tại'
        ]);
    }
    public function showFormRegister(){
        $title = "Đăng ký";
        return view('auth.register');
    }
    public function Register(Request $request){
        $data = $request->validate([
            'ho_ten' => 'required|string|max:255',
            'so_dien_thoai' => 'required',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);
        $user = User::query()->create($data);
        return redirect()->back()->with('msg', 'Đăng ký thành công');
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
