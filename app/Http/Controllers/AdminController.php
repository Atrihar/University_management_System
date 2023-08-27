<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Group;
use App\Models\Teacher;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    public function all_teachers()
    {
        $user = DB::table('teachers')
            ->select('*')
            ->where('role', '=', 'Teacher ')
            ->get();
        return view('admin.pages.all_teachers', compact('user'));
    }

    public function admins()
    {
        $user = DB::table('teachers')
            ->select('*')
            ->where('role', '=', 'Admin ')
            ->get();
        return view('admin.pages.admins', compact('user'));
    }

    public function all_students()
    {
        $students = Student::all();
        return view('admin.pages.all_students', compact('students'));
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
        $group = DB::table('groups')
            ->select('groups.name as name', 'groups.grade as grade', 'groups.project_name as project', 'groups.created_at as started', 'groups.updated_at as ended', 'teachers.name as supervisour')
            ->join('teachers', 'groups.instructor_id', '=', 'teachers.id')
            ->whereNotNull('groups.grade')
            ->get();
        return view('admin.pages.completed', compact('group'));
    }

    public function running()
    {
        $group = DB::table('groups')
            ->select('groups.name as name', 'groups.id as gid', 'groups.project_name as project', 'groups.created_at as started', 'teachers.name as supervisour')
            ->join('teachers', 'groups.instructor_id', '=', 'teachers.id')
            ->whereNull('groups.grade')
            ->get();
        return view('admin.pages.running', compact('group'));
    }

    public function unassigned()
    {
        $group = DB::table('groups')
            ->select('*')
            ->whereNull('instructor_id')
            ->get();
        return view('admin.pages.unassigned', compact('group'));
    }

    public function adduser(Request $req)
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
        $role = $req->role;
        $is_approved = 1;

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
                $user->is_approved = $is_approved;
                $user->password = md5($password);
                if ($user->save()) {
                    return redirect()->back();
                }
            }
        }
    }

    public function addstudent(Request $req)
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
        $is_approved = 1;
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
                $user->is_approved = $is_approved;
                $user->password = md5($password);
                if ($user->save()) {
                    return redirect()->back();
                }
            }
        }
    }

    public function approve($userId)
    {
        $user = Student::find($userId);
        $user->is_approved = 1;
        if ($user->save()) {
            return redirect()->back();
        }
    }

    public function userapprove($userId)
    {
        $user = Teacher::find($userId);
        $user->is_approved = 1;
        if ($user->save()) {
            return redirect()->back();
        }
    }

    public function assign_instructor($id, Request $req)
    {
        // get the group id
        $group = Group::find($id);
        $std_detailes = DB::table('students')
            ->select('*')
            ->join('group_members', 'students.id', '=', 'group_members.s_id')
            ->join('groups', 'groups.id', '=', 'group_members.group_id')
            ->where('groups.id', '=', $id)
            ->get();
        // dd($std_detailes);
        $teacher = Teacher::select('id', 'name')->get();

        // dd($teacher);
        return view('admin.pages.assign_instructor', compact('group', 'std_detailes', 'teacher'));
    }

    public function update_group($id, Request $req)
    {
        $obj = Group::find($id);
        $obj->name = $req->name;
        $obj->grade = $req->grade;
        $obj->project_name = $req->project_name;
        $name = $req->instructor_name;
        $instructor_id = DB::table('teachers')
            ->select('id')
            ->where('name', '=', $name)
            ->get();
        // dd($name);
        $obj->instructor_id = $req->instructor_id;

        if ($obj->save()) {
            return redirect('admin/running');
        }
    }

    public function delete_group($id)
    {
        // dd($id);
        $x = (int)$id;
        // dd(gettype($x));
        Group::find($x)->delete();
        return redirect('admin/completed');
    }

    public function delete_student($id)
    {
        Student::find($id)->delete();
        return redirect('admin/all_students');
    }

    public function edit_student($id)
    {
        $student = Student::find($id);
        return view('admin.pages.edit_student', compact('student'));
    }

    public function update_student($id, Request $req)
    {
        $obj = Student::find($id);
        $obj->name = $req->name;
        $obj->std_ID = $req->std_ID;
        $obj->email = $req->email;
        $obj->contact_no = $req->contact_no;
        $obj->fathers_name = $req->fathers_name;
        $obj->fathers_contact_no = $req->fathers_contact_no;
        $obj->mothers_name = $req->mothers_name;
        $obj->mothers_contact_no = $req->mothers_contact_no;
        $obj->parmenent_address = $req->parmenent_address;
        $obj->parmenent_city = $req->parmenent_city;
        $obj->parmenent_state = $req->parmenent_state;
        $obj->parmenent_zip_code = $req->parmenent_zip_code;
        $obj->present_address = $req->present_address;
        $obj->present_city = $req->present_city;
        $obj->present_state = $req->present_state;
        $obj->present_zip_code = $req->present_zip_code;
        $obj->batch = $req->batch;

        if ($obj->save()) {
            return redirect('admin/all_students');
        }
    }

    public function delete_instructor($id)
    {
        Teacher::find($id)->delete();
        return redirect('admin/all_teachers');
    }

    public function edit_instructor($id)
    {
        $instructor = Teacher::find($id);
        return view('admin.pages.edit_instructor', compact('instructor'));
    }

    public function update_instructor($id, Request $req)
    {
        $obj = Teacher::find($id);
        $obj->name = $req->name;
        $obj->std_ID = $req->std_ID;
        $obj->email = $req->email;
        $obj->contact_no = $req->contact_no;
        $obj->fathers_name = $req->fathers_name;
        $obj->mothers_name = $req->mothers_name;
        $obj->parmenent_address = $req->parmenent_address;
        $obj->parmenent_city = $req->parmenent_city;
        $obj->parmenent_state = $req->parmenent_state;
        $obj->parmenent_zip_code = $req->parmenent_zip_code;
        $obj->present_address = $req->present_address;
        $obj->present_city = $req->present_city;
        $obj->present_state = $req->present_state;
        $obj->present_zip_code = $req->present_zip_code;

        if ($obj->save()) {
            return redirect('admin/all_teachers');
        }
    }
}
