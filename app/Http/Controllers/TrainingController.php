<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrainingRequest;
use App\Models\Courses;
use App\Models\TrainingCourses;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
      public function index()
    {
        $data = TrainingCourses::all();
        if(!empty($data)){
            foreach($data as $info){
                $info->course_name = Courses::where('id',$info->coursesId)->value('name');
            }
        }

        return view('trainings.index', ['data' => $data]);
    }

    public function create()
    {
        $courses = Courses::select('id','name')->where('active',1)->get();
        return view('trainings.create',['courses'=>$courses]);
    }


    public function store(CreateTrainingRequest $request){
        $data = $request->validated();
        TrainingCourses::create($data);
        return redirect()->route('trainings.index')->with('success', 'Student Created successfuly');
    }

    public function edit($id){
        $data = TrainingCourses::find($id);
        $courses = Courses::select('id','name')->where('active',1)->get();
        if(empty($data)){
            return redirect()->route('trainings.index')->with('error', 'Sorry we cant load your records');
        }
        return view('trainings.edit',['data' =>$data,'courses'=>$courses]);
    }

    public function update($id,CreateTrainingRequest $request){
        $data = $request->validated();
        
        TrainingCourses::whereId($id)->update($data);
        return redirect()->route('trainings.index')->with('success', 'Student Updated successfuly');
    }

    public function destroy($id){
        TrainingCourses::destroy($id);
        return redirect()->route('trainings.index')->with('success','Student deleted successfuly');
    }
    

}
