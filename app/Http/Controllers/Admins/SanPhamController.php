<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Admins\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public $thu_cung;

    public function __construct() {
        $this->thu_cung = new SanPham();
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
        $title = "Thêm Thú Cưng";
        return view('admins.thucung.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request -> isMethod('POST')) {
            $params = $request -> except('_token');
            $this->thu_cung->createThuCung($params);
        }
        return redirect()->route('admin/sanpham.index')->with('success', 'Thêm sản phẩm thành công!');
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
        //
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
