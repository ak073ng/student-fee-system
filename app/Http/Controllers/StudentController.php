<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    //index
    public function index(){
        return view('95242.student');
    }

    //insert new student
    public function insertNewStudent(){

        //get data from form inputs
        $student_id = request('student-number');
        $full_name = request('full-name');
        $dob = request('dob');
        $address = request('address');

        //check if input student_id exists in system
        $student_exists = Student::all()->where('student_id', '=', $student_id);

        //if empty, then student does not exist
        //insert input student record
        if($student_exists->isEmpty()){

            //insert new student record to db
            $new_student = new Student();
            $new_student->student_id = $student_id;
            $new_student->full_name = $full_name;
            $new_student->dob = $dob;
            $new_student->address = $address;
            $new_student->save();  

            return redirect('/view');

        }else{

            $response = "Student with the id number ". $student_id. " exists!";

            //makes view repsonse box visible
            $display_status = "block";

            return view('95242.student', ['response' => $response, 'display_status' => $display_status]);
        }

        
    }
}
