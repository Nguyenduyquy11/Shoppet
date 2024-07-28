<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\BinhLuan;
use Illuminate\Http\Request;

class BinhLuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listBinhLuan = BinhLuan::query()->get();
        $title = "Quản lý bình luận";
        return view('admins.binhluan.index', ['title' => $title, 'listBinhLuan' => $listBinhLuan]);
    }
    public function destroy(string $id)
    {
        $binhLuan = BinhLuan::findOrFail($id);
        $binhLuan->delete();
        return redirect()->route('admin.binhluan.index')->with('msg', '
            Xóa bình luận thành công, hãy lọc những bình luận mang tính chất tiêu cực nhé!
        ');
    }
}
