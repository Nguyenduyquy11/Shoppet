<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use App\Models\Admins\DanhMuc;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\OrderRequest;
use App\Http\Controllers\Controller;
use App\Mail\OrderConfirm;
use App\Models\DonHang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Đơn hàng của tôi";
        $danhMuc = DanhMuc::query()->get();
        $donHangs = Auth::user()->donHang;
        $trangThaiDonHang = DonHang::TRANG_THAI_DON_HANG;
        $type_cho_xac_nhan = DonHang::CHO_XAC_NHAN;
        $type_dang_van_chuyen = DonHang::DANG_VAN_CHUYEN;
        return view('clients.donhang.index', compact('title', 'danhMuc','donHangs','trangThaiDonHang','type_cho_xac_nhan','type_dang_van_chuyen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cart = session()->get('cart', []);
        if (!empty($cart)) {
            $total = 0;
            $subTotal = 0;
            foreach ($cart as $item) {
                $subTotal += $item['gia'] * $item['so_luong'];
            }
            $shipping = 25000;
            $total = $subTotal + $shipping;
            $title = "Đơn hàng";
            $danhMuc = DanhMuc::query()->get();

            return view('clients.donhang.create', compact('title', 'danhMuc', 'cart', 'subTotal', 'total', 'shipping'));
        }
        return redirect()->route('giohang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        if ($request->isMethod('POST')) {
            DB::beginTransaction();
            try {
                $params = $request->except('_token');
                $params['ma_don_hang'] =  $this->generateUniqueOrderCode();
                $donHang = DonHang::query()->create($params);
                $donHangId = $donHang->id;
                $cart = session()->get('cart', []);
                foreach ($cart as $key => $item) {
                    $thanhTien = $item['gia'] * $item['so_luong'];
                    $donHang->chiTietDonHang()->create([
                        'don_hang_id' => $donHangId,
                        'san_pham_id' => $key,
                        'don_gia' => $item['gia'],
                        'so_luong' => $item['so_luong'],
                        'thanh_tien' => $thanhTien,
                    ]);
                }
                DB::commit();
                // Khi thêm thành công sẽ thực hiện công việc bên dưới này
                //Trừ đi số lượng của sản phẩm
                // Gửi mail khi đặt hàng thành công
                Mail::to($donHang->email_nguoi_nhan)->queue(new OrderConfirm($donHang));
                session()->put('cart', []);
                return redirect()->route('donhang.index')->with('success', 'Đơn hàng đã được tạo thành công!');
            } catch (\Exception $e) {
                DB::rollBack();
                return redirect()->route('giohang')->with('error', 'Có lỗi khi tạo đơn hàng. Vui lòng thử lại sau!');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Chi tiết đơn hàng";
        $danhMuc = DanhMuc::query()->get();
        $donHang = DonHang::query()->findOrFail($id);
        $trangThaiDonHang = DonHang::TRANG_THAI_DON_HANG;
        $trangThaiThanhToan = DonHang::TRANG_THAI_THANH_TOAN;
        return view('clients.donhang.show', compact('title', 'danhMuc','donHang','trangThaiDonHang','trangThaiThanhToan'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $donHang = DonHang::query()->findOrFail($id);
        DB::beginTransaction();
        try {
           if($request->has('huy_don_hang')){
            $donHang->update([
                'trang_thai_don_hang' => DonHang::HUY_DON_HANG
            ]);
           }elseif($request->has('da_giao_hang')){
            $donHang->update([
                'trang_thai_don_hang' => DonHang::DA_GIAO_HANG
            ]);
           }
           DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    function generateUniqueOrderCode()
    {
        do {
            $orderCode = 'ORD-' . Auth::id() . '-' . now()->timestamp;
        } while (DonHang::where('ma_don_hang', $orderCode)->exists());
        return $orderCode;
    }
}
