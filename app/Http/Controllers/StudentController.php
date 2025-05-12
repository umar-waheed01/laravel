<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function addStudent(Request $req) {
        $student = new Student;
        $student->name = $req->name;
        $student->email = $req->email;
        $student->batch = $req->batch;
        $student->save();

        if($student){
            return redirect('studentlist');
        }
    }

    function list(){
        $studentData = Student::paginate(5);
        return view('list-student', ['data' => $studentData]);
    }

    function delete($id){
        $isDeleted = Student::destroy($id);
        if($isDeleted){
            return redirect('studentlist');
        }
    }

    function edit($id) {
       $studentData = Student::find($id);
       return view('edit-student', ['data' => $studentData]);
    }

    function update(Request $req, $id) {
        $student = Student::find($id);
        $student->name = $req->name;
        $student->email = $req->email;
        $student->batch = $req->batch;
        $student->save();

        if($student){
            return redirect('studentlist');
        }
    } 
    function search(Request $req) {
        // $search = $req->input('search');
        $studentData = Student::where('name', 'like', "%$req->search")->get();
        return view('list-student', ['data' => $studentData, 'search' => $req->search]);
    }

    function deleteMulti(Request $req) {
        $ids = $req->input('id');
        if ($ids && count($ids) > 0) {
            $isDeleted = Student::destroy($ids);
            if ($isDeleted) {
                return redirect('studentlist');
            } else {
                return redirect('studentlist')->with('error', 'Failed to delete students');
            }
        } else {
            return redirect('studentlist')->with('error', 'No students selected for deletion');
        }
    }

    function showList() {
        return "show list";
    }
    
}
