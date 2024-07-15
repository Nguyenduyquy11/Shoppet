<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Admins\ChucVu;
use Illuminate\Http\Request;

class ChucVuController extends Controller
{
    protected $chuc_vu;
    public function __construct()
    {
        $this->chuc_vu = new ChucVu();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listChucVu = $this->chuc_vu->getListChucVu();
        $title = "Quản lý chức vụ";
        return view('admins.chucvu.index', ['title' => $title, 'listChucVu' => $listChucVu]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm mới chức vụ";
        return view('admins.chucvu.create', ['title' => $title]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $this->chuc_vu->createChucVu($params);
        }
        return redirect()->route('admin_chucvu.index')->with('success', 'Thêm mới chức vụ thành công!');
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
        $detaiChucVu = $this->chuc_vu->getDetailChucVu($id);
        $title = "Chỉnh sửa chức vụ";
        return view('admins.chucvu.update', ['title' => $title, 'detaiChucVu' => $detaiChucVu]);
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
