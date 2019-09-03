<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class Studentcontroller extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function getStudentData($student_no){
        return View::make('student',[
            'student_no'=>$student_no,
            'subject'=>null
        ]);
    }

    public function getStudentScore($student_no,$subject){
        return View::make('student',[
            'student_no'=>$student_no,
            'subject'=>$subject
        ]);
    }

}
