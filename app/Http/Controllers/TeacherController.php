<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Group;
use App\Models\Teacher;
use App\Models\assignment;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function home()
    {
        return view('supervisor.pages.home');
    }

    public function completed(Request $req)
    {
        $id = $req->session()->get('userid');
        $group = DB::table('groups')
            ->select('*')
            ->whereNotNull('grade')
            ->get();
        return view('supervisor.pages.completed_group', compact('group'));
    }

    public function running(Request $req)
    {
        $id = $req->session()->get('userid');
        $group = DB::table('groups')
            ->select('*')
            ->whereNull('grade')
            ->get();
        return view('supervisor.pages.running_group', compact('group'));
    }

    public function profile(Request $req)
    {
        $id = $req->session()->get('userid');
        $profile = DB::table('teachers')
            ->select('*')
            ->where('id', '=', $id)
            ->get();
        return view('supervisor.pages.profile', compact('profile'));
        // dd($profile);
    }


    public function completed_group_info($id, Request $req)
    {
        $group = Group::find($id);

        $x = (int)$id;

        $assignment = DB::table('assignments')
            ->select('*')
            ->where('group_id', '=', $x)
            ->get();

        $student = DB::table('students')
            ->select('students.std_ID', 'students.name', 'students.email', 'students.contact_no', 'students.batch')
            ->join('group_members', 'students.id', '=', 'group_members.s_id')
            ->where('group_members.group_id', '=', $x)
            ->get();

        // dd($student);
        // dd($id);
        // dd($assignment);
        // dd(gettype($x));

        return view('supervisor.pages.complete_assignment', compact('assignment', 'student', 'group'));
    }

    public function assignment_info($id, Request $req)
    {
        $id = (int)$id;
        // dd($id);

        $assignment_detailes = DB::table('assignments')
            ->select('*')
            ->where('id', '=', $id)
            ->get();

        // dd($assignment_detailes);
        return view('supervisor.pages.assignment_info', compact('assignment_detailes'));
    }

    public function new_task($id, Request $req){
        $group = Group::find($id);
        return view('supervisor.pages.new_task', compact('group'));
    }


    public function check_assignment(Request $req, $id)
    {
        $obj = Assignment::find($id);
        $obj->grade = $req->grade;
        $obj->note = $req->note;
        if ($obj->save()) {
            return redirect()->back();
        }
    }

    public function running_group_info($id, Request $req)
    {
        $group = Group::find($id);
        // dd($group);

        $x = (int)$id;

        $assignment = DB::table('assignments')
            ->select('*')
            ->where('group_id', '=', $x)
            ->get();

        $student = DB::table('students')
            ->select('students.std_ID', 'students.name', 'students.email', 'students.contact_no', 'students.batch')
            ->join('group_members', 'students.id', '=', 'group_members.s_id')
            ->where('group_members.group_id', '=', $x)
            ->get();


        return view('supervisor.pages.running_assignment', compact('assignment', 'x', 'student', 'group'));
    }

    public function crate_assignment($id, Request $req){

        $asgmt = new Assignment();

        $name = $req->name;
        $group_id = $req->$id;
        $due = $req->due;
        // $attachment = $req->attachment;
        $ques = $req->ques;

        $file = $req->file('attachment');
        if ($file) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // dd($filename);
            $filePath = public_path() . '/asset/';
            $file->move($filePath, $filename);
            $asgmt->attachment = $filename;
        }

        // dd( $id);

        $asgmt->name = $name;
        $asgmt->group_id = $id;
        $asgmt->due = $due;
        $asgmt->ques = $ques;


        if ($asgmt->save()) {
            return redirect()->back();
        }

    }

}
