<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

// Login page for all the users
Route::get('/login', [AuthController::class, 'login']);

// admin dashboard
Route::get('/admin', [AdminController::class, 'index']);
Route::get('admin/all_teachers', [AdminController::class, 'all_teachers']);
Route::get('admin/all_students', [AdminController::class, 'all_students']);
Route::get('admin/admins', [AdminController::class, 'admins']);
Route::get('admin/add_users', [AdminController::class, 'add_users']);
Route::get('admin/add_students', [AdminController::class, 'add_students']);
