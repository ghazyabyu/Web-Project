<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
class TeacherController extends Controller
{
    public function index()
    {
        $teacher = teacher::all();

         return view('teacher',['title' => 'Daftar Guru', 'teacher' => $teacher]);
    }
}
