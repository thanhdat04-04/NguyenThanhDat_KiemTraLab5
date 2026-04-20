<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

// Controller xử lý các API CRUD cho sinh viên
class StudentController extends Controller
{
    // Lấy danh sách tất cả sinh viên
    public function index()
    {
        return Student::all();
    }

    // Thêm mới sinh viên
    public function store(Request $request)
    {
        $student = Student::create($request->all());
        return response()->json($student, 201);
    }

    // Lấy thông tin 1 sinh viên theo id
    public function show($id)
    {
        return Student::findOrFail($id);
    }

    // Cập nhật thông tin sinh viên theo id
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return $student;
    }

    // Xóa sinh viên theo id
    public function destroy($id)
    {
        Student::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}
