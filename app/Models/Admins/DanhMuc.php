<?php

namespace App\Models\Admins;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DanhMuc extends Model
{
    use HasFactory;
    public function getListDM()
    {
        $getListDM = DB::table('danh_mucs')->get();
        return $getListDM;
    }
    public function CreateDanhMuc($data)
    {
        DB::table('danh_mucs')->insert($data);
    }

    public function getDetailDanhMuc($id)
    {
        $danhMuc = DB::table('danh_mucs')->WHERE('id', $id)->first();
        return $danhMuc;
    }
    public function updateDanhMuc($id, $params){
        DB::table('danh_mucs')->where('id', $id)->update($params);
    }
    public function deleteDanhMuc($id)
    {
        DB::table('danh_mucs')->where('id', $id)->delete();
    }
    protected $table = 'danh_mucs';
    protected $fillable = [
        'ten_danh_muc',
        'anh_danh_muc',
        'mo_ta',
    ];
}
