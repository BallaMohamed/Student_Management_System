<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Department;
use App\Models\Level;
use App\Models\Teacher;
class CoursesController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('Courses.index' , ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $levels = Level::all();
        $teachers = Teacher::all();
        return view('Courses.create' , ['levels' => $levels , 'departments' => $departments , 'teachers' => $teachers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validateCourse();
       $course = new Course(request(['name' , 'description' , 'department_id' , 'level_id' , 'teacher_id']));
       $course->save();
       return redirect('/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('Courses.show' , ['course' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $departments = Department::all();
        $levels = Level::all();
        $teachers = Teacher::all();
        return view('Courses.edit' ,['course' =>$course ,'departments' => $departments , 'levels' => $levels , 'teachers' => $teachers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Course $course)
    {
        $course->update($this->validateCourse());
         return redirect('/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect('courses');
    }

    protected function validateCourse(){
      return request()->validate([
        'name'    =>  'required',
        'description'     =>  'required',
        'department_id'     =>  'required',
        'level_id'     =>  'required',
        'teacher_id'     =>  'required',
      ]);
    }
}
