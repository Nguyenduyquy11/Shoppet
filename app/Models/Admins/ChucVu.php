<?php

namespace App\Models\Admins;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChucVu extends Model
{
    use HasFactory;
    public function getListChucVu() {
        $listChucVu = DB::table('chuc_vus')->get();
        return $listChucVu;
    }
    public function createChucVu($data){
        DB::table('chuc_vus')->insert($data);
    }
    public function getDetailChucVu($id){
        $detailChucVu = DB::table('chuc_vus')->where('id', $id)->first();
        return $detailChucVu;
    }
    
}
