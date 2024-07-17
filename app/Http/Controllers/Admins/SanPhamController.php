<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Admins\DanhMuc;
use App\Models\Admins\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public $thu_cung;
    protected $danh_muc;

    public function __construct()
    {
        $this->thu_cung = new SanPham();
        $this->danh_muc = new DanhMuc();
    }

    public function index()
    {

        $listThuCung = $this->thu_cung->getListThuCung();
        $title = "Danh dách thú cưng";
        return view('admins.thucung.index', ['listThuCung' => $listThuCung, 'title' => $title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listDanhMuc = $this->danh_muc->getListDM();
        $title = "Thêm Thú Cưng";
        return view('admins.thucung.create', ['listDanhMuc' => $listDanhMuc, 'title' => $title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('hinh_anh')) {
            $fileName = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
        } else {
            $fileName = null;
        }
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            $params['hinh_anh'] = $fileName;
            $this->thu_cung->createThuCung($params);
        }
        return redirect()->route('admin_sanpham.index')->with('success', 'Thêm sản phẩm thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Sửa Thông Tin Thú Cưng";
        $listDanhMuc = $this->danh_muc->getListDM();
        $thuCung = $this->thu_cung->getDetailThuCung($id);
        // dd($thuCung);
        return view('admins.thucung.update', ['thuCung' => $thuCung, 'title' => $title, 'listDanhMuc' => $listDanhMuc]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->isMethod('PUT')){
            $params = $request->except('_token', '_method');
            $sanpham = $this->thu_cung->getDetailThuCung($id);
            if($request->hasFile('hinh_anh')){
                if($sanpham->hinh_anh){
                    Storage::disk('public')->delete($sanpham->hinh_anh);
                }
                $params['hinh_anh'] = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
            } else {
                $params['hinh_anh'] = $sanpham->hinh_anh;
            }
            $this->thu_cung->updateThuCung($id,$params);
            return redirect()->route('admin_sanpham.index')->with('success', 'Sửa sản phẩm thành công!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $thucung = $this->thu_cung->getDetailThuCung($id);
        $this->thu_cung->deleteThuCung($thucung->id);
        return redirect()->route('admin_sanpham.index')->with('success', 'Xóa sản phẩm thành công!');
    }
}
