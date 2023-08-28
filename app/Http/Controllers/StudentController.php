<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Group;
use App\Models\Group_member;
use App\Models\assignment;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function home()
    {
        return view('student.pages.home');
    }

    public function assignment(Request $req)
    {
        $id = $req->session()->get('userid');

        $group = DB::table('group_members')
            ->select('*')
            ->where('s_id', '=', $id)
            ->get();

        if ($group) {
            $assignment_info = DB::table('assignments')
            ->select('assignments.id', 'assignments.group_id', 'assignments.name', 'assignments.ques', 'assignments.attachment', 'assignments.ans', 'assignments.due', 'assignments.submission', 'assignments.grade', 'assignments.status')
            ->join('group_members', 'assignments.group_id', '=', 'group_members.group_id')
            ->where('group_members.s_id', '=', $id)
            ->get();

        // dd($id);
        // dd($assignment_info);
        return view('student.pages.Assignment', compact('assignment_info'));
        } else {
            return redirect('student/create');
        }



    }

    public function profile(Request $req)
    {

        $id = $req->session()->get('userid');
        $profile = DB::table('students')
            ->select('*')
            ->where('id', '=', $id)
            ->get();
        return view('student.pages.profile', compact('profile'));
    }

    public function group(Request $req)
    {
        $id = $req->session()->get('userid');
        // dd($id);

        $group = DB::table('group_members')
            ->select('*')
            ->where('s_id', '=', $id)
            ->get();

        // dd($group);
        $check = empty($group[0]->group_id);

        // dd($check);


        if ($check == false) {

            $g_id = $group[0]->group_id;
        //  dd($group);

            $student_info = DB::table('students')
                ->select('*')
                ->join('group_members', 'students.id', '=', 'group_members.s_id')
                ->where('group_members.group_id', '=', $g_id)
                ->get();
            // dd($student_info);

            $group_name = DB::table('groups')
                ->select('*')
                ->where('id', '=', $g_id)
                ->get();
            // dd($group_name);

            return view('student.pages.group', compact('student_info', 'group_name'));
        } else {
            return redirect('student/create');
        }
    }

    public function create()
    {
        return view('student.pages.create');
    }

    public function newGroup(Request $req)
    {
        $name = $req->name;

        $group_exists = Group::where('name', '=', $name)->first();
        if ($group_exists) {
            return redirect()->back()->with('info', 'Group Already Exists');
        } else {
            $group = new Group();
            $group->name = $name;
            if ($group->save()) {
                return redirect('student/addMember');
            }
        }
    }

    public function addMember(Request $req)
    {
        // fetching the id of the user that is logged in to the session
        // $value = $req->session()->get('userid');s
        // dd($value);
        return view('student.pages.add_members');
    }

    public function add_members(Request $req)
    {
        $id = $req->id;
        $name = $req->name;
        $datasave = [
            'id' => $id,
            'name' => $name,
        ];

        // conunting the number of student id in the group
        $no_std = count($id);

        //getting the id of the group
        $groupid = DB::table('groups')
            ->select('id')
            ->where('name', '=', $name)
            ->get();

        $group_id = str_replace(
            ['"', '[', ']', '{', '}', ':', '(', ')', 'i', 'd'],
            "",
            $groupid
        );

        for ($i = 0; $i < $no_std; $i++) {
            $group_member = new Group_member();
            $group_member->group_id = $group_id;
            $sid = DB::table('students')
                ->select('id')
                ->where('std_ID', '=', $id[$i])
                ->get();

            //removing all the special caracter
            $s_id = str_replace(
                ['"', '[', ']', '{', '}', ':', '(', ')', 'i', 'd'],
                "",
                $sid
            );
            $group_member->s_id = $s_id;
            $group_member->save();
        }
        return redirect('student/group');
    }


    public function view($id, Request $req)
    {
        $id = (int)$id;
        // dd($id);

        $assignment_detailes = DB::table('assignments')
            ->select('*')
            ->where('id', '=', $id)
            ->get();

        // dd($assignment_detailes);
        return view('student.pages.view', compact('assignment_detailes'));
    }

    public function submit_assignment($id, Request $req)
    {
        $obj = Assignment::find($id);

        $file = $req->file('ans');
        if ($file) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // dd($filename);
            $filePath = public_path() . '/asset/';
            $file->move($filePath, $filename);
            $obj->ans = $filename;
        }

        $ansr = $req->ansr;
        if ($ansr) {
            $obj->ansr = $ansr;
        }
        $obj->submission = now();

        if ($obj->save()) {
            return redirect('student/assignment');
        }
    }
}
