<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function home()
    {
        return view('student.pages.home');
    }

    public function completed(){
        return view('student.pages.completed_assignment');
    }

    public function running(){
        return view('student.pages.pending_assignment');
    }

    public function profile(){
        return view('student.pages.profile');
    }

    public function group(){
        return view('student.pages.group');
    }


}
