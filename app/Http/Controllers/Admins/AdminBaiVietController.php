<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\BaiViet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminBaiVietController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Quản lý bài viết";
        $listBaiViet = BaiViet::query()->get();
        return view('admins.baiviet.index', compact('title', 'listBaiViet'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Đăng bài viết";
        return view('admins.baiviet.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            if ($request->hasFile('hinh_anh')) {
                $params['hinh_anh'] = $request->file('hinh_anh')->store('uploads/baiviet', 'public');
            } else {
                $params['hinh_anh'] = null;
            }
            BaiViet::create($params);
            return redirect()->route('admin.baiviet.index')->with('success', 'Đăng bài viêt thành công! bấm xem ngay để xem bài viết');
        }
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
        $title = "Chỉnh sửa bài viết";
        $baiViet = BaiViet::query()->findOrFail($id);
        return view('admins.baiviet.update', compact('title', 'baiViet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->isMethod('PUT')) {
            $params = $request->except('_token', '_method');
            $baiViet = BaiViet::query()->findOrFail($id);
            if ($request->hasFile('hinh_anh')) {
                if ($baiViet->hinh_anh) {
                    Storage::disk('public')->delete($baiViet->hinh_anh);
                }
                $params['hinh_anh'] = $request->file('hinh_anh')->store('uploads/baiviet', 'public');
            } else {
                $params['hinh_anh'] = $baiViet->hinh_anh;
            }
            $baiViet->update($params);
            return redirect()->route('admin.baiviet.index')->with('success', 'Chỉnh sửa bài viết thành công! bấm xem ngay để xem bài viết');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $baiViet = BaiViet::query()->findOrFail($id);
        if ($baiViet->hinh_anh && Storage::disk('public')->exists($baiViet->hinh_anh)) {
            Storage::disk('public')->delete($baiViet->hinh_anh);
        }
        $baiViet->delete();
        return redirect()->route('admin.baiviet.index')->with('danger', 'Xóa bài viết thành công!');
    }
}
