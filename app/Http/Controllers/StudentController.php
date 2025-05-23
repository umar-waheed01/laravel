<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

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
        return Student::all();
    }
    
    function insertStudent(Request $request) {
    // Manual validation
    $validator = Validator::make($request->all(), [
        'name' => 'required|min:2|max:10',
        'email' => 'required|email|unique:students,email',
        'phone' => 'required|string|max:20',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'errors' => $validator->errors()
        ], 422);
    }

    // Validation passed
    $validated = $validator->validated();

    $student = Student::create($validated);

    return response()->json([
        'message' => 'Student inserted successfully',
        'data' => $student
    ], 201);
}

    function updateStudent(Request $request)
{
    $student = Student::find($request->id);

    if (!$student) {
        return response()->json(['result' => 'Student not found'], 404);
    }

    $student->name = $request->name;
    $student->email = $request->email;
    $student->phone = $request->phone;

    if ($student->save()) { 
        return response()->json(['result' => 'Student updated successfully']);
    } else {
        return response()->json(['result' => 'Student not updated'], 500);
    }
}

    function deleteStudent($id){
        $student = Student::destroy($id);
        if($student){
            return ['result' => "Student Record Deleted"];
        }else{
            return ['result' => "student Record not deleted"];
        }
    }

    function searchStudent($name){
        $student = Student::where('name', 'like', "%$name")->get();
        if($student){
            return ["result" =>$student];
        }else{
            return ["result"=> "no record found"];
        }
    }



}
