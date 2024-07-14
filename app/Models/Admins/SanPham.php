<?php

namespace App\Models\Admins;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SanPham extends Model
{
    use HasFactory;

     public function getListThuCung () {
        $getlist = DB::table('san_phams')
        ->join('danh_mucs', 'san_phams.danh_muc_id', '=' , 'danh_mucs.id')
        ->select('san_phams.*' , 'danh_mucs.ten_danh_muc')
        ->get();
        return $getlist;
    }

    public function createThuCung($data) {
        DB::table('san_phams')->insert($data);
    }
}
