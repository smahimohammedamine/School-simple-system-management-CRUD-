<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddStudentToCourse;
use App\Http\Requests\CreateTrainingRequest;
use App\Models\Courses;
use App\Models\Student;
use App\Models\TrainingCourses;
use App\Models\TrainingCoursesEnrollement;

class TrainingController extends Controller
{
    public function index()
    {
        $data = TrainingCourses::all();
        if (! empty($data)) {
            foreach ($data as $info) {
                $info->course_name = Courses::where('id', $info->coursesId)->value('name');
            }
        }

        return view('trainings.index', ['data' => $data]);
    }

    public function create()
    {
        $courses = Courses::select('id', 'name')->where('active', 1)->get();

        return view('trainings.create', ['courses' => $courses]);
    }

    public function store(CreateTrainingRequest $request)
    {
        $data = $request->validated();
        TrainingCourses::create($data);

        return redirect()->route('trainings.index')->with('success', 'Student Created successfuly');
    }

    public function edit($id)
    {
        $data = TrainingCourses::find($id);
        $courses = Courses::select('id', 'name')->where('active', 1)->get();
        if (empty($data)) {
            return redirect()->route('trainings.index')->with('error', 'Sorry we cant load your records');
        }

        return view('trainings.edit', ['data' => $data, 'courses' => $courses]);
    }

    public function update($id, CreateTrainingRequest $request)
    {
        $data = $request->validated();

        TrainingCourses::whereId($id)->update($data);

        return redirect()->route('trainings.index')->with('success', 'Student Updated successfuly');
    }

    public function destroy($id)
    {
        TrainingCourses::destroy($id);

        return redirect()->route('trainings.index')->with('success', 'Student deleted successfuly');
    }

    public function detail($id)
    {
        $data = TrainingCourses::find($id);
        $courses = Courses::select('id', 'name')->get();
        if (empty($data)) {
            return redirect()->route('trainings.index')->with('error', 'Sorry we cant load your records');
        }

        $data->course_name = Courses::where('id', $data->coursesId)->value('name');
        $data->studentCounter = TrainingCoursesEnrollement::where('trainingCoursesId',$id)->count();
        $students_enrollement = TrainingCoursesEnrollement::where('trainingCoursesId',$id)->get();
        if(!empty($students_enrollement)){
            foreach ($students_enrollement as $info) {
                $info->student_name = Student::where('id', $info->studentId)->value('name');
                
            }
        }


        return view('trainings.detail', ['data' => $data, 'courses' => $courses,'students'=>$students_enrollement]);
    }


    public function addStudent($id){
        $data_training = TrainingCourses::find($id);
        if(empty($data_training)){
            return redirect()->route('trainings.index')->with('error', 'Sorry we cant load your records');
        }

        $students = Student::select('id','name')->where('active',1)->get();
        return view('trainings.add_student_to_course',['students'=>$students,'data'=>$data_training]);
    }

    public function deleteStudent($id){
        $enrollment = TrainingCoursesEnrollement::find($id);
        if(empty($enrollment)){
            return redirect()->route('trainings.index')->with('error', 'Sorry we cant load your records');
        }

        $enrollment->delete();
        return redirect()->route('trainings.detail', $enrollment->trainingCoursesId)->with('success', 'Student deleted successfuly ');
    }

    public function storeAddStudent($id, AddStudentToCourse $request){
        $training = TrainingCourses::find($id);
        if(empty($training)){
            return redirect()->route('trainings.index')->with('error', 'Sorry we cant load your records');
        }

        $exists = TrainingCoursesEnrollement::where('trainingCoursesId', $id)
            ->where('studentId', $request->studentId)
            ->exists();
        if($exists){
            return redirect()->back()->with('error', 'Student is already enrolled in this course');
        }

        $data = $request->validated();
        $data['trainingCoursesId'] = $id;

        TrainingCoursesEnrollement::create($data);

        return redirect()->route('trainings.index')->with('success', 'Student added to course successfully');
    }
}
