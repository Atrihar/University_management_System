<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Session;

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


    public function signout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }


    public function userregistration(Request $req)
    {
        $name = $req->name;
        $email = $req->email;
        $fathers_name = $req->fathers_name;
        $mothers_name = $req->mothers_name;
        $parmenent_address = $req->parmenent_address;
        $parmenent_city = $req->parmenent_city;
        $parmenent_state = $req->parmenent_state;
        $parmenent_zip_code = $req->parmenent_zip_code;
        $present_address = $req->present_address;
        $present_city = $req->present_city;
        $present_state = $req->present_state;
        $present_zip_code = $req->present_zip_code;
        $contact_no = $req->contact_no;
        $password = $req->password;
        $cnf_password = $req->cnf_password;
        $role = "Teacher";

        if ($password == $cnf_password) {
            $user_exists = Teacher::where('email', '=', $email)->first();
            if ($user_exists) {
                return redirect()->back()->with('info', 'User Already Exists');
            } else {
                $user = new Teacher();
                $user->name = $name;
                $user->email = $email;
                $user->contact_no = $contact_no;
                $user->fathers_name = $fathers_name;
                $user->mothers_name = $mothers_name;
                $user->parmenent_address = $parmenent_address;
                $user->parmenent_city = $parmenent_city;
                $user->parmenent_state = $parmenent_state;
                $user->parmenent_zip_code = $parmenent_zip_code;
                $user->present_address = $present_address;
                $user->present_city = $present_city;
                $user->present_state = $present_state;
                $user->present_zip_code = $present_zip_code;
                $user->role = $role;
                $user->password = md5($password);
                if ($user->save()) {
                    return redirect('/login');
                }
            }
        }
    }

    public function studentregistration(Request $req)
    {
        $name = $req->name;
        $std_ID = $req->std_ID;
        $email = $req->email;
        $contact_no = $req->contact_no;
        $fathers_name = $req->fathers_name;
        $fathers_contact_no = $req->fathers_contact_no;
        $mothers_name = $req->mothers_name;
        $mothers_contact_no = $req->mothers_contact_no;
        $parmenent_address = $req->parmenent_address;
        $parmenent_city = $req->parmenent_city;
        $parmenent_state = $req->parmenent_state;
        $parmenent_zip_code = $req->parmenent_zip_code;
        $present_address = $req->present_address;
        $present_city = $req->present_city;
        $present_state = $req->present_state;
        $present_zip_code = $req->present_zip_code;
        $batch = $req->batch;
        $password = $req->password;
        $cnf_password = $req->cnf_password;
        if ($password == $cnf_password) {
            $user_exists = Student::where('email', '=', $email)->first();
            if ($user_exists) {
                return redirect()->back()->with('info', 'User Already Exists');
            } else {
                $user = new Student();
                $user->name = $name;
                $user->std_ID = $std_ID;
                $user->email = $email;
                $user->contact_no = $contact_no;
                $user->fathers_name = $fathers_name;
                $user->fathers_contact_no = $fathers_contact_no;
                $user->mothers_name = $mothers_name;
                $user->mothers_contact_no = $mothers_contact_no;
                $user->parmenent_address = $parmenent_address;
                $user->parmenent_city = $parmenent_city;
                $user->parmenent_state = $parmenent_state;
                $user->parmenent_zip_code = $parmenent_zip_code;
                $user->present_address = $present_address;
                $user->present_city = $present_city;
                $user->present_state = $present_state;
                $user->present_zip_code = $present_zip_code;
                $user->batch = $batch;
                $user->password = md5($password);
                if ($user->save()) {
                    return redirect('/login');
                }
            }
        }
    }

    public function userlogin(Request $req)
    {
        $email = $req->email;
        $password = $req->password;
        $user = Teacher::where('email', '=', $email)
            ->where('password', '=', md5($password))
            ->first();

        // $std_ID = $req->std_ID;
        // $password = $req->password;
        $std = Student::where('email', '=', $email)
            ->where('password', '=', md5($password))
            ->first();

        if ($user) {
            if ($user->is_approved == 1) {
                Session::put('username', $user->name);
                Session::put('userrole', $user->role);
                Session::put('userid', $user->id);
                if ($user->role != 'Admin') {
                    return redirect('/teacher/profile',);
                } else {
                    return redirect('/admin');
                }
            } else {
                return redirect()->back()->with('info', 'User not approved yet.');
            }
        } elseif ($std) {

            if ($std->is_approved == 1) {
                Session::put('username', $std->name);
                Session::put('userid', $std->id);
                Session::put('user_id', $std->std_ID);
                Session::put('useremail', $std->email);
                return redirect('/student/profile');
            } else {
                return redirect()->back()->with('info', 'User not approved yet.');
            }
        } else {
            return redirect()->back()->with('info', 'Invalid email or password');
        }
    }
}
