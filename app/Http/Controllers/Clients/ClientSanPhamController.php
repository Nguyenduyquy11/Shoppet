<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Admins\DanhMuc;
use App\Models\Admins\SanPham;
use Illuminate\Http\Request;

class ClientSanPhamController extends Controller
{
    public function SanPhamHome(){
        $title = "Trang chủ";
        // $danhMuc = DanhMuc::findOrFail($id);
        $listSanPham = SanPham::query()->paginate(12);
        return view('clients.thucung.index',compact('title', 'listSanPham'));
    }
    public function chiTietSanPham(Request $request, string $id){
        $title = "Chi tiết thông tin";
        $sanPhamDeTail = SanPham::findOrFail($id);
        return view('clients.thucung.chitietsanpham',compact('title','sanPhamDeTail'));
    }
    // public function DanhMucHome(Request $request){
    //     $danhMuc = DanhMuc::query()->get();
    //     return view('clients.blocks.header', compact('danhMuc'));
    // }
    public function lienHe(Request $request){
        // $danhMuc = DanhMuc::query()->get();
        $title = "Liên hệ";
        return view('clients.lienhe.index', compact('title'));
    }
}
