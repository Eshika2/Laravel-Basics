<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function Addstudent() {
        return view('index'); //index.php file
    }
    public function save(Request $request) {  //taking form data
        //add data
        //calling Student.php
        Student::create([
            'student_name' => $request -> studentName, // name values in the input tag 
            'student_email' => $request -> email,
            'student_dob' => $request -> dob,
        ]);

        $notification = [
            "message" => "Student has been Added!!!"
        ];

        return redirect() -> back() -> with($notification);
    }
}
