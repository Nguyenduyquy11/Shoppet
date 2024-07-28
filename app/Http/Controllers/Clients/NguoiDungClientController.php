<?php

namespace App\Http\Controllers\Clients;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admins\DanhMuc;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NguoiDungClientController extends Controller
{
    public function formDeTailUser(string $id){
        $title = "Trang cá nhân";
        $danhMuc = DanhMuc::query()->get();
        $user = User::findOrFail($id);
        return view('clients.nguoidung.detail', compact('title','danhMuc','user'));
    }
    public function formUpdateUser(string $id){
        $title = "Cập nhật thông tin người dùng";
        $danhMuc = DanhMuc::query()->get();
        $user = User::findOrFail($id);
        return view('clients.nguoidung.update', compact('title','danhMuc','user'));
    }
    public function updateUser(Request $request, string $id){
        $user = User::findOrFail($id);
        if($request->isMethod('PUT')){
            $params = $request->except('_token', '_method');
            if($request->hasFile('anh_dai_dien')){
                if($user->anh_dai_dien){
                    Storage::disk('public')->delete($user->anh_dai_dien);
                }
                $params['anh_dai_dien'] = $request->file('anh_dai_dien')->store('uploads/taikhoan', 'public');

            }else{
                $params['anh_dai_dien'] = $user->anh_dai_dien;
            }
            $user->update($params);
            return redirect()->back()->with('msg', 'Chỉnh sửa thông tin cá nhân thành công');
        }
    }
}
