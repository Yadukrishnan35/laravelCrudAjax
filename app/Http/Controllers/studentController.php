<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Json;

class studentController extends Controller
{
    public function register() {

        return view('student.registration');
    }

   

    public function saveStudent() {
       student::create([
            'name'=>request('name'),
            'age'=>request('age'),
            'dob'=>request('dob'),
            'address'=>request('address')
        ]);
        return response()->Json(["success"=>"Student Added Successfully"]);
    }

    public function viewStudent() {
        $students = student::all();
        return view('student.studentView',compact('students'));
    }

    public function getStudent($student_id) {
        $student = DB::table('students')
                    ->where('id',$student_id)->first();          
        return view('student.editStudent',compact('student'));
    }
}
