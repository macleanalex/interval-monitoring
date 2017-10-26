<?php

namespace App\Http\Controllers;

use App\Behavior;
use App\Student;
use Illuminate\Http\Request;

class BehaviorsController extends Controller
{
    public function create(Request $request, $id)
    {
        $student = Student::where('id', $id)
            ->where('user_id', \Auth::id())
            ->firstOrFail();

        return view('behaviors.create', compact('student'));
    }

    public function store(Request $request, $id)
    {
        $formData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'max:500'
        ]);

        $student = new Behavior();
        $student->name = $formData['name'];
        $student->description = $formData['description'];
        $student->student_id = $id;
        $student->save();

        return redirect('students')->with('status', $formData['name'] . ' has been added.');
    }
}
