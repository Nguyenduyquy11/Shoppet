<?php

namespace App\Models\Admins;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DanhMuc extends Model
{
    use HasFactory;
    public function getListDM(){
        $getListDM = DB::table('danh_mucs')->get();
        return $getListDM;
    }
    public function CreateDanhMuc($data){
        DB::table('danh_mucs')->insert($data);
    }
}
