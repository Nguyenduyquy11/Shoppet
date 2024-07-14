<?php

namespace App\Models\Admins;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SanPham extends Model
{
    use HasFactory;

     public function getListThuCung () {
        $getlist = DB::table('san_phams')->get();
        return $getlist;
    }

    public function createThuCung($data) {
        DB::table('san_phams')->insert($data);
    }
}
