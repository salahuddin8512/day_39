<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private $teacher;
    private $teachers;

    public function index()
    {
        return view('admin.teacher.add');
    }
    public function create(Request $request)
    {

        Teacher::newUser($request);
        return redirect('/add-teacher')->with('message', 'User info create successfully');
    }
    public function manage()
    {
        $this->teachers = Teacher::all();


        return view('admin.teacher.manage', ['teachers' =>$this->teachers]);
    }
}
