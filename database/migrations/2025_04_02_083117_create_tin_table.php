<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        // Tạo bảng LoaiTin
        Schema::create('loaitin', function (Blueprint $table) {
            $table->id(); // ID tự động tăng
            $table->string('tenLoaiTin'); // Tên loại tin
            $table->timestamps(); // created_at & updated_at
        });

        // Tạo bảng Tin
        Schema::create('tin', function (Blueprint $table) {
            $table->id(); // ID tự động tăng
            $table->string('tieuDe'); // Tiêu đề bài viết
            $table->text('tomTat'); // Tóm tắt
            $table->string('urlHinh')->nullable(); // URL hình ảnh (có thể null)
            $table->unsignedBigInteger('idLT'); // Khóa ngoại đến bảng LoaiTin
            $table->foreign('idLT')->references('id')->on('loaitin')->onDelete('cascade');
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('tin');
        Schema::dropIfExists('loaitin');
    }
};