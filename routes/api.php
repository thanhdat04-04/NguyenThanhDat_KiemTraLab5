<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

// Định nghĩa các routes cho API

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API CRUD cho sinh viên (tự động tạo GET, POST, PUT, DELETE)
Route::apiResource('students', StudentController::class);

// Route kiểm tra API hoạt động
Route::get('/ping', function () {
    return ['status' => 'ok'];
});
