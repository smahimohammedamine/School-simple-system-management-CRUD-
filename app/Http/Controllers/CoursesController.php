<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use App\Models\Courses;


class CoursesController extends Controller
{

    public function index(){
        $data = Courses::all();
        return view('courses.index',['data' => $data]);
    }

    public function create(){
        return view('courses.create');
    }

    public function store(CreateCourseRequest $request){
        $counter = Courses::query()->where('name', $request->name)->count();
        if ($counter > 0) {
            //withInput keep the same inputs that the user enter
            return redirect()->back()->with('error', 'Course already exists')->withInput();
        }
        Courses::create($request->validated());
        return redirect()->route('courses.index')->with('success', 'Course created successfully');
    }

    public function edit($id){
        $data = Courses::find($id);
        return view('courses.edit',['data' => $data]);

    }

    public function update($id,CreateCourseRequest $request){
        
        Courses::whereId($id)->update($request->validated());
        return redirect()->route('courses.index')->with('success', 'Course updated successfully');


    }

    public function destroy($id){
        Courses::destroy($id);
        return redirect()->route('courses.index')->with('success', 'Course Deleted successfully');

    }
}
