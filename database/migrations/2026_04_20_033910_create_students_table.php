<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Tạo bảng students với các trường: id, name, email (duy nhất), age, timestamps
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');            // Tên sinh viên
            $table->string('email')->unique(); // Email sinh viên (duy nhất)
            $table->integer('age');             // Tuổi sinh viên
            $table->timestamps();
        });
    }

    // Xóa bảng students
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
