<?php

namespace App\Http\Controllers\Clients;

use App\Models\LienHe;
use Illuminate\Http\Request;
use App\Models\Admins\DanhMuc;
use App\Http\Controllers\Controller;
use App\Http\Requests\LienHeRequest;
use Illuminate\Support\Facades\Auth;

class LienHeClientController extends Controller
{
    public function lienHe(Request $request)
    {
        $danhMuc = DanhMuc::query()->get();
        $title = "Liên hệ";
        return view('clients.lienhe.create', compact('title', 'danhMuc'));
    }
    public function guiLienHe(LienHeRequest $request)
    {
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            LienHe::query()->create($params);
        }
        return redirect()->back()->with('msg', 'Gửi liên hệ thành công!');
    }
    
}
