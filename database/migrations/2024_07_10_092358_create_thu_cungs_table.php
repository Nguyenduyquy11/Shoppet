<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('thu_cungs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_danh_muc');
            $table->string('anh_thu_cung', 100)->nullable();
            // $table->string('dac_diem');
            $table->string('ten_thu_cung', 100);
            $table->integer('tuoi');
            $table->string('gioi_tinh',10);
            $table->double('gia', 10, 2);
            $table->unsignedInteger('so_luong');
            $table->string('mo_ta')->nullable();
            $table->date('ngay_dang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thu_cungs');
    }
};
