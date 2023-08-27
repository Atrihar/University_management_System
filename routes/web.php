<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

// Login page for all the users
Route::get('/login', [AuthController::class, 'login']);
Route::get('/std_register', [AuthController::class, 'std_register']);
Route::get('/teacher_registation', [AuthController::class, 'teacher_register']);
Route::get('signout', [AuthController::class, 'signout']);
Route::post('user/registration', [AuthController::class, 'userregistration']);
Route::post('student/registration', [AuthController::class, 'studentregistration']);
Route::post('/userLogin', [AuthController::class, 'userlogin']);


// admin controller
Route::get('/admin', [AdminController::class, 'index']);
Route::get('admin/all_teachers', [AdminController::class, 'all_teachers']);
Route::get('admin/all_students', [AdminController::class, 'all_students']);
Route::get('admin/admins', [AdminController::class, 'admins']);
Route::get('admin/add_users', [AdminController::class, 'add_users']);
Route::get('admin/add_students', [AdminController::class, 'add_students']);
Route::get('admin/completed', [AdminController::class, 'completed']);
Route::get('admin/running', [AdminController::class, 'running']);
Route::get('admin/unassigned', [AdminController::class, 'unassigned']);
Route::post('user/adduser', [AdminController::class, 'adduser']);
Route::post('student/addstudent', [AdminController::class, 'addstudent']);
Route::get('admin/approve/{userId}', [AdminController::class, 'approve']);
Route::get('admin/userapprove/{userId}', [AdminController::class, 'userapprove']);
Route::get('/assign_instructor/{id}', [AdminController::class, 'assign_instructor']);
Route::post('/update_group/{id}', [AdminController::class, 'update_group']);
Route::get('/delete_group/{id}', [AdminController::class, 'delete_group']);
Route::get('/delete_student/{id}', [AdminController::class, 'delete_student']);
Route::get('/edit_student/{id}', [AdminController::class, 'edit_student']);
Route::post('/update_student/{id}', [AdminController::class, 'update_student']);
Route::get('/delete_instructor/{id}', [AdminController::class, 'delete_instructor']);
Route::get('/edit_instructor/{id}', [AdminController::class, 'edit_instructor']);
Route::post('/update_instructor/{id}', [AdminController::class, 'update_instructor']);

// teacher controller
Route::get('/teacher', [TeacherController::class, 'home']);
Route::get('teacher/completed', [TeacherController::class, 'completed']);
Route::get('teacher/running', [TeacherController::class, 'running']);
Route::get('teacher/profile', [TeacherController::class, 'profile']);
Route::get('/completed_group_info/{id}', [TeacherController::class, 'completed_group_info']);
Route::get('/assignment_info/{id}', [TeacherController::class, 'assignment_info']);
Route::post('/check_assignment/{id}', [TeacherController::class, 'check_assignment']);
Route::get('/running_group_info/{id}', [TeacherController::class, 'running_group_info']);
Route::get('/new_task/{id}', [TeacherController::class, 'new_task']);
Route::post('/crate_assignment/{id}', [TeacherController::class, 'crate_assignment']);



//student controller
Route::get('/student', [StudentController::class, 'home']);
Route::get('student/group', [StudentController::class, 'group']);
Route::get('student/assignment', [StudentController::class, 'assignment']);
Route::get('student/profile', [StudentController::class, 'profile']);

Route::get('student/create', [StudentController::class, 'create']);
Route::post('student/newGroup', [StudentController::class, 'newGroup']);
Route::get('student/addMember', [StudentController::class, 'addMember']);
Route::post('student/add_members', [StudentController::class, 'add_members']);
Route::get('/view/{id}', [StudentController::class, 'view']);
Route::post('/submit_assignment/{id}', [StudentController::class, 'submit_assignment']);
