<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function home(){
        return view('supervisor.pages.home');
    }

    public function completed(){
        return view('supervisor.pages.completed_group');
    }

    public function running(){
        return view('supervisor.pages.running_group');
    }

    public function profile(){
        return view('supervisor.pages.profile');
    }
}
