<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $data = Student::all();

        return view('students.index', ['data' => $data]);
    }

    public function create()
    {
        return view('students.create');
    }


    public function store(CreateStudentRequest $request){
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $data['image'] = $filename;
        }

        Student::create($data);
        return redirect()->route('students.index')->with('success', 'Student Created successfuly');
    }

    public function edit($id){
        $data = Student::find($id);
        return view('students.edit',['data' =>$data]);
    }

    public function update($id,CreateStudentRequest $request){
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $data['image'] = $filename;
        }

        Student::whereId($id)->update($data);
        return redirect()->route('students.index')->with('success', 'Student Updated successfuly');
    }

    public function destroy($id){
        Student::destroy($id);
        return redirect()->route('students.index')->with('success','Student deleted successfuly');
    }
    

}
