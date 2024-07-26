<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Models\Admins\DanhMuc;
use App\Http\Controllers\Controller;
use App\Http\Requests\DanhMucRequest;

class DanhMucController extends Controller
{
    protected $danh_muc;
    public function __construct()
    {
        $this->danh_muc = new DanhMuc();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listDanhMuc = $this->danh_muc->getListDM();
        $title = "Danh sách danh mục";
        return view('admins.danhmuc.index', ['title' => $title, 'listDanhMuc' => $listDanhMuc]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm mới danh mục";
        return view('admins.danhmuc.create', ['title' => $title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DanhMucRequest $request)
    {
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            $this->danh_muc->CreateDanhMuc($params);
        }
        return redirect()->route('admin.danhmuc.index')->with('success', 'Thêm mới danh mục thành công!');
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
        $title = "Sửa Danh Mục Thú Cưng";
        $danhMuc = $this->danh_muc->getDetailDanhMuc($id);

        return view('admins.danhmuc.update', ['title' => $title, 'danhMuc' => $danhMuc]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DanhMucRequest $request, string $id)
    {
        if ($request->isMethod('PUT')) {
            $params = $request->except('_token', '_method');
            // $danhmuc = $this->danh_muc->getDetailDanhMuc($id);
            $this->danh_muc->updateDanhMuc($id, $params);
            return redirect()->route('admin.danhmuc.index')->with('success', 'Cập nhật danh mục thành công!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $danhmuc = $this->danh_muc->getDetailDanhMuc($id);
        $this->danh_muc->deleteDanhMuc($danhmuc->id);
        return redirect()->route('admin.danhmuc.index')->with('success', 'Xóa danh mục thành công!');
    }
}
