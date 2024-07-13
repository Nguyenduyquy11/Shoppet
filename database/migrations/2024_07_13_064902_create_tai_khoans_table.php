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
        Schema::create('tai_khoans', function (Blueprint $table) {
            $table->id();
            $table->string('anh_dai_dien', 255)->nullable();
            $table->string('ho_ten', 150);
            $table->string('email', 255);
            $table->string('so_dien_thoai', 15);
            $table->integer('gioi_tinh');
            $table->text('dia_chi');
            $table->date('ngay_sinh');
            $table->string('mat_khau', 100);
            $table->unsignedBigInteger('chuc_vu_id');
            $table->foreign('chuc_vu_id')->references('id')->on('chuc_vus')->onDelete('cascade');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tai_khoans');
    }
};
