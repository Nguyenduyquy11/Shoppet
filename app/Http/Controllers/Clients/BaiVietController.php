<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use App\Models\Admins\DanhMuc;
use App\Http\Controllers\Controller;
use App\Models\BaiViet;

class BaiVietController extends Controller
{
    public function baiViet(){
        $title = "Bài viết";
        $danhMuc = DanhMuc::query()->get();
        $listBaiViet = BaiViet::query()->get();
        return view('clients.baiviet.index', compact('title','danhMuc','listBaiViet'));
    }
    public function chiTietBaiViet(string $id){
        $title = "Xem bài viết";
        $danhMuc = DanhMuc::query()->get();
        $deTailBaiViet = BaiViet::query()->findOrFail($id);
        return view('clients.baiviet.show', compact('title','danhMuc','deTailBaiViet'));
    }
}
