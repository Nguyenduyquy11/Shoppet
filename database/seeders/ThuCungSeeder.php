<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ThuCungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('thu_cungs')->insert([
            [
                'id_danh_muc' => 1,
                'ten_thu_cung' => "Mèo Hunter trắng đen",
                'tuoi' => 3,
                'gioi_tinh' => "Mèo Đực",
                'gia' => 300000,
                'so_luong' => 2,
                'mo_ta' => "Đây là một loại mèo rất thông minh và đáng yêu",
                'ngay_dang' => "2024-08-09",

            ],
            [
                'id_danh_muc' => 2,
                'ten_thu_cung' => "Chó Monster lông vũ",
                'tuoi' => 5,
                'gioi_tinh' => "Chó Đực",
                'gia' => 500000,
                'so_luong' => 5,
                'mo_ta' => "Đây là một loại Chó rất nhanh nhẹn, và hài hước",
                'ngay_dang' => "2024-08-15",

            ]
        ]);
    }
}
