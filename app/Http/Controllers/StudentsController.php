<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::where('user_id', \Auth::id())->get();

        return view('students.index', compact('students'));
    }
}
