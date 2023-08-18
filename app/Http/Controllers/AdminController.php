<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    public function all_teachers()
    {
        return view('admin.pages.all_teachers');
    }

    public function admins()
    {
        return view('admin.pages.admins');
    }

    public function all_students()
    {
        return view('admin.pages.all_students');
    }

    public function add_students()
    {
        return view('admin.pages.add_students');
    }

    public function add_users()
    {
        return view('admin.pages.add_users');
    }

    public function completed()
    {
        return view('admin.pages.completed');
    }

    public function running()
    {
        return view('admin.pages.running');
    }

    public function unassigned()
    {
        return view('admin.pages.unassigned');
    }
}
