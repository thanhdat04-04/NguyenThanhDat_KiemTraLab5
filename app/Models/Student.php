<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Model đại diện cho bảng students trong CSDL
class Student extends Model
{
    use HasFactory;

    // Các trường được phép gán giá trị hàng loạt
    protected $fillable = ['name', 'age', 'email'];
}
