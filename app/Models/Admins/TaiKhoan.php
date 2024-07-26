<?php

namespace App\Models\Admins;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaiKhoan extends Model
{
    const ROLE_ADMIN = 'Admin';
    const ROLE_USER = 'User';
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'anh_dai_dien',
        'ho_ten',
        'email',
        'so_dien_thoai',
        'gioi_tinh',
        'dia_chi',
        'ngay_sinh',
        'mat_khau',
        'chuc_vu_id',
        'status',
    ];
    public function getListTaiKhoan()
    {
        $listtaikhoan = DB::table('tai_khoans')
            ->join('chuc_vus', 'tai_khoans.chuc_vu_id', '=', 'chuc_vus.id')
            ->select('tai_khoans.*', 'chuc_vus.ten_chuc_vu')
            ->get();
        return $listtaikhoan;
    }
    public function createTaiKhoan($data)
    {
        DB::table('tai_khoans')->insert($data);
    }
    public function getDetailTaiKhoan($id)
    {
        $deTailTaiKhoan = DB::table('tai_khoans')->where('id', $id)->first();
        return $deTailTaiKhoan;
    }
    public function deleteTaiKhoan($id)
    {
        DB::table('tai_khoans')->where('id', $id)->delete();
    }
}
