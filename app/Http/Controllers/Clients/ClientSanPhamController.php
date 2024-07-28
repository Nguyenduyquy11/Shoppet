<?php

namespace App\Http\Controllers\Clients;

use App\Models\BinhLuan;
use Illuminate\Http\Request;
use App\Models\Admins\DanhMuc;
use App\Models\Admins\SanPham;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientSanPhamController extends Controller
{
    public function SanPhamHome(Request $request){
        $title = "Trang chủ";
        $search = $request->input('search');
        $danhMuc = DanhMuc::query()->get();
        $sanPhamYeuThich = SanPham::orderBy('luot_xem', 'desc')->take(4)->get();
        $sanPhamMoi = SanPham::orderBy('id', 'desc')->take(4)->get();
        $listSanPham = SanPham::orderBy('id', 'asc')->paginate(12);
        // $sanPhamDeTail = SanPham::findOrFail($id);
        return view('clients.thucung.index',compact('title', 'listSanPham', 'danhMuc','sanPhamMoi','sanPhamYeuThich'));
    }
    public function chiTietSanPham(Request $request, string $id){
        $title = "Chi tiết thông tin";
        $danhMuc = DanhMuc::query()->get();
        $sanPhamDeTail = SanPham::findOrFail($id);
        $userId = null;
        if(Auth::check()){
            $userId = Auth::user()->id;
        }
        $sanPhamLienQuan = SanPham::where('danh_muc_id', $sanPhamDeTail->danh_muc_id)->take(4)->get();
        
        return view('clients.thucung.chitietsanpham',compact('title','sanPhamDeTail', 'sanPhamLienQuan', 'danhMuc','userId'));
    }
    public function sanPhamDanhMuc(Request $request, string $id){
        $title = "Danh mục sản phẩm";
        $danhMuc = DanhMuc::query()->get();
        $DetailDanhMuc = DanhMuc::findOrFail($id);
        $sanPham = SanPham::where('danh_muc_id', $id)->get();
        return view('clients.thucung.sanphamdanhmuc', compact('DetailDanhMuc', 'sanPham', 'danhMuc','title'));
    }
    public function timKiemSanPham(Request $request){
        $search = $request->input('search');
        $danhMuc = DanhMuc::query()->get();
        $sanPham = SanPham::where('ten_san_pham', 'LIKE', "%{$search}%")
        ->orWhere('mo_ta', 'LIKE', "%{$search}%")
        ->paginate(12);
        // dd($sanPham);
        return view('clients.thucung.search',compact('danhMuc', 'sanPham', 'search'));
    }
    public function binhLuan(Request $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            // dd($params);
            BinhLuan::create($params);
            return redirect()->back();
        }
        
    }
}
