<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    use HasFactory;
    protected $table = 'gio_hangs';
    protected $fillable = [
        'user_id',
        'san_pham_id',
        'so_luong',
        'gia',
    ];
}
