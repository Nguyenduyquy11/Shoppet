<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use App\Models\Admins\DanhMuc;
use App\Models\Admins\SanPham;
use App\Http\Controllers\Controller;

class CartClientController extends Controller
{
    public function listCart(){
        $title = "Giỏ hàng";
        $cart = session()->get('cart', []);
        $total = 0;
        $subTotal = 0;
        foreach ($cart as $item) {
            $subTotal += $item['gia'] * $item['so_luong'];
        }
        $shipping = 25000;
        $total = $subTotal + $shipping;

        $danhMuc = DanhMuc::query()->get();
        return view('clients.giohang.index', compact('title','danhMuc', 'cart','subTotal', 'shipping', 'total'));
    }
    public function addToCart(Request $request){
        $sanPhamId = $request->input('san_pham_id');
        $soLuong = $request->input('so_luong');
        $sanPham = SanPham::query()->findOrFail($sanPhamId);    
        //Khởi tạo 1 mảng chứa thông tin giỏ hàng trên session
        $cart = session()->get('cart', []);
        if (isset($cart[$sanPhamId])) {
            //Sản phẩm đã tồn tại trong giỏ hàng    
            $cart[$sanPhamId]['so_luong'] += $soLuong;
        }else{
            //Sản phẩm chưa có trong giỏ hàng
            $cart[$sanPhamId] =[
                'ten_san_pham' => $sanPham->ten_san_pham,
                'mo_ta' => $sanPham->mo_ta,
                'so_luong' => $soLuong,
                'gia' => isset($sanPham->gia_khuyen_mai) ? $sanPham->gia_khuyen_mai : $sanPham->gia_san_pham,
                'hinh_anh' => $sanPham->hinh_anh,
            ];
        }
        // dd($cart);
        session()->put('cart', $cart);
        return redirect()->back()->with('msg', 'Thêm vào giỏ hàng thành công');
    }
    public function deleteCart(string $id){
        $cart = session()->get('cart', []);
        if(isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('msg', 'Đơn hàng đã bị xóa');

    }
}
