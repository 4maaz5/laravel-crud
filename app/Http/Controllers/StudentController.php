<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('home',['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->city = $request->city;
        $student->marks = $request->marks;
        $student->save();
        return redirect(route('index'))->with('message','Student Added Successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $id)
    {
        // $student = Student::find($id);
        return view('editform',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Student $id)
    {
        // $student = Student::find($id);
        $id->name = $request->name;
        $id->city = $request->city;
        $id->marks = $request->marks;
        $id->save();
        return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $id)
    {
        $id->delete();
        // Student::destroy($id);
        return redirect(route('index'));
    }
}
