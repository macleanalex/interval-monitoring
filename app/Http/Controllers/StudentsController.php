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

    public function detail(Request $request, int $id)
    {
        $student = Student::where('user_id', \Auth::id())
            ->where('id', $id)
            ->firstOrFail();

        $behaviors = collect([]);

        return view('students.detail', compact('student', 'behaviors'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $formData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $student = new Student();
        $student->name = $formData['name'];
        $student->user_id = \Auth::id();
        $student->save();

        return redirect('students')->with('status', $formData['name'] . ' has been added.');
    }
}
