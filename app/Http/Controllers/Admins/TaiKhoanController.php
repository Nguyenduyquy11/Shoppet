<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admins\TaiKhoan;

class TaiKhoanController extends Controller
{
    protected $tai_khoan;
    public function __construct()
    {
        $this->tai_khoan = new TaiKhoan();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listTaiKhoan = $this->tai_khoan->getListTaiKhoan();
        // dd($listTaiKhoan);
        $title = "Quản lý tài khoản";
        return view('admins.taikhoan.index', ['title' => $title, 'listTaiKhoan' => $listTaiKhoan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm mới tài khoản";
        return view('admins.taikhoan.create', ['title' => $title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request -> hasFile('anh_dai_dien')){
            $fileName = $request->file('anh_dai_dien')->store('uploads/taikhoan', 'public');
        } else{
            $fileName = null;
        }
        
        if($request -> isMethod('POST')){
            $params = $request -> except('_token');
            $params['anh_dai_dien'] = $fileName;
            $this->tai_khoan->createTaiKhoan($params);
        }
        return redirect()->route('admin_taikhoan.index')->with('success', 'Thêm tài khoản thành công');
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
        $deTailTaiKhoan = $this->tai_khoan->getDetailTaiKhoan($id);
        $title = "Chỉnh sửa tài khoản";
        return view('admins.taikhoan.update', ['title' => $title, 'deTailTaiKhoan' => $deTailTaiKhoan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
