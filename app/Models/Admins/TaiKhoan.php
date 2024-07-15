<?php

namespace App\Models\Admins;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaiKhoan extends Model
{
    use HasFactory;
    public function getListTaiKhoan (){
        $listtaikhoan = DB::table('tai_khoans')
        ->join('chuc_vus', 'tai_khoans.chuc_vu_id', '=', 'chuc_vus.id')
        ->select('tai_khoans.*', 'chuc_vus.ten_chuc_vu')
        ->get();
        return $listtaikhoan;
    }
    public function createTaiKhoan ($data){
        DB::table('tai_khoans')->insert($data);
    }
    public function getDetailTaiKhoan($id){
        $deTailTaiKhoan = DB::table('tai_khoans')->where('id', $id)->first();
        return $deTailTaiKhoan;
    }
}
