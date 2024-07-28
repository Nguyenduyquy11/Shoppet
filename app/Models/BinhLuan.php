<?php

namespace App\Models;

use App\Models\Admins\SanPham;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;
    protected $table = 'binh_luans';
    protected $fillable = [
        'user_id',
        'san_pham_id',
        'noi_dung',
    ];
    public function sanPham(){
        return $this->belongsTo(SanPham::class, 'san_pham_id');
    }
    public function User(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
