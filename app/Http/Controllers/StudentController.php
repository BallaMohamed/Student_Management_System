<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Student;
use App\Models\Department;
use App\Models\Level;
use App\Models\Activity;
class StudentController extends Controller
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
        $students = Student::all();
        return view('Student.index' , ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $levels      = Level::all();
        $activities  = Activity::all();
        return view('Student.make' , ['departments' => $departments , 'levels' => $levels , 'activities' => $activities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validateStudent();
       $student = new Student(request(['name' , 'email' , 'age' , 'phone' , 'serial_number' , 'payment_of_fees' , 'department_id' , 'level_id']));
       $student->save();
       $student->activities()->attach(request('activities'));
       return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('Student.show' , ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
       $departments = Department::all();
        $levels      = Level::all();
        $activities  = Activity::all();
        return view('Student.edit' , ['student' => $student ,'departments' => $departments , 'levels' => $levels , 'activities' => $activities]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Student $student)
    {
        $student->update($this->validateStudent());
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/students');
    }

   protected function validateStudent(){
      return request()->validate([
        'name'    =>  'required',
        'email'  =>  'required',
        'age'     =>  'required',
        'phone'     =>  'required',
        'serial_number'  =>  ['required','unique:students'],
        'payment_of_fees'     =>  'required',
        'department_id'     =>  'required',
        'level_id'     =>  'required',
      ]);
    }
}
