<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // const ROLE_ADMIN = 'Admin';
    // const ROLE_USER = 'User';
    use HasFactory;
    use SoftDeletes;
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
    protected $fillable = [
        'ho_ten',
        'email',
        'so_dien_thoai',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
