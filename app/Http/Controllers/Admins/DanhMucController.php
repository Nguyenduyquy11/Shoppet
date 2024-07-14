<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\Admins\DanhMuc;
use Illuminate\Http\Request;

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
        $title = "Danh sách danh mục";
        return view('admins.danhmuc.index', ['title' => $title]);
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
    public function store(Request $request)
    {
        if($request -> isMethod('POST')){
            $params = $request -> except('_token');
            $this->danh_muc->CreateDanhMuc($params);
        }
        return redirect()->route('admindanhmuc.index')->with('success', 'Thêm mới danh mục thành công!');
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
