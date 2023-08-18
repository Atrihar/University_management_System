<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function std_register()
    {
        return view('registation');
    }

    public function teacher_register()
    {
        return view('teacher_registation');
    }

}
