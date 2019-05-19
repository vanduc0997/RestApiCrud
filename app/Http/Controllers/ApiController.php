<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $students = new Student();

        $students->fname = $request->input('fname');
        $students->lname = $request->input('lname');
        $students->email = $request->input('email');
        $students->password = $request->input('password');
        $students->save();
        return response()->json($students);
    }
    public function show()
    {
        $students =  Student::all();
        return response()->json($students);
    }
    public function showById($id)
    {
        $students = Student::find($id);
        return response()->json($students);
    }
    public function updateById(Request $request, $id)
    {
        $students = Student::find($id);
        $students->fname = $request->input('fname');
        $students->lname = $request->input('lname');
        $students->email = $request->input('email');
        $students->password = $request->input('password');
        $students->save();
        return response()->json($students);
    }
    public function deleteById(Request $request, $id)
    {
        $students = Student::find($id);
        $students->delete();
        return response()->json($students);
    }
}
