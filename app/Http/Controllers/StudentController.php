<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{

    public function index(){
        // $students = Student::all();
        $user = Auth::user();
        $id = Auth::id();
        $students = Student::paginate(3);
        return view('index', [
            'student' => $students,
            'user' => $user,
            'id' => $id
        ]);
    }

    public function filter(){
        $students = Student::where('score','>=', 80)
        ->where('name', 'LIKE' ,'%I%')
        ->get();
        return view('filter', compact('students'));
    }
    
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',            
        ]);

        Student::create([
            'name' => $request->name,
            'score' => $request->score,
            'teacher_id' => 1
        ]);

        return Redirect::route('home');
    
    }

    public function edit(Student $student){
        return view('edit', compact('student'));
    }

    public function update( Request $request , Student $student){
        $student->update([
            'name' => $request->name,
            'score' => $request->score
        ]);

        return Redirect::route('home');
    }

    public function delete(Student $student){
        $student->delete();
        return Redirect::route('home');
    }

    public function show($id){
        $students = Student::find($id);                
        return view('show', [
            'student' => $students            
        ]);
        // $name = Student::find($id)->name; 
        // $address = Student::find($id)->contact->address;        

        // $students = Teacher::find($id)->students;
        // return view('example', [
        //     'students' => $students            
        //     // 'name' => $name,
        //     // 'address' => $address,
            
        // ]);


        // Has To Manny Activity to Student
        // $activity = Activity::find($id);
        // $students = $activity->students;
        // return view('example', [
        //     'activity' => $activity->name,
        //     'students' => $students
        // ]);


        // Has To Manny Student to Activity
        // $students = Student::find($id);
        // $activity = $students->activities;
        // return view('example', [
        //     'student' => $students->name,
        //     'activities' => $activity
        // ]);
        
    }

    public function cek(){
        return ' Asuppp';
    }
}
