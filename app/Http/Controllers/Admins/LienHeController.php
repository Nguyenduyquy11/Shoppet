<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\LienHe;
use Illuminate\Http\Request;

class LienHeController extends Controller
{
    public function index(){
        $title = "Danh sách liên hệ";
        $listLienHe = LienHe::query()->get();
        return view('admins.lienhe.index', compact('listLienHe', 'title'));
    }
    public function edit(string $id)
    {
        $title = "Chỉnh sửa liên hệ";
        $deTailLienHe = LienHe::findOrFail($id);
        return view('admins.lienhe.update', compact('title','deTailLienHe'));
    }
    public function update(Request $request, string $id)
    {
        $lienHe = LienHe::findOrFail($id);
        if($request->isMethod('PUT')){
            $params = $request->except('_token', '_method');
            $lienHe->update($params);
            // dd($params);
            return redirect()->route('admin.lienhe.index')->with('msg', 'Cập nhật trạng thái thành công');
        }
    }
}
