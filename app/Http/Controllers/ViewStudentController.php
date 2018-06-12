<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Fee;

class ViewStudentController extends Controller
{
    //index
    public function index($student_id){

        //get student name
        $student_name = Student::all()->where('student_id','=', $student_id)->first();

        //get total fees paid
        $total_paid = Fee::all()->where('student_id','=', $student_id)->sum('amount');

        //get fee statement for selected user
        $fees = Fee::all()->where('student_id','=', $student_id);


        if($total_paid == 0){

            $response = $student_name->full_name." with the id number ". $student_id. " has not paid fees at all!";

            //makes view box visible
            $display_status = "block";

        }else{

            $response = "Student with the id number ". $student_id. " has paid fee!";

            //makes view box visible
            $display_status = "none";

        }

        return view('95242.view_student', [
            'response' => $response, 
            'display_status' => $display_status,
            'student_name' => $student_name, 
            'fees' => $fees, 
            'total_paid' => $total_paid]);
        
    }
}
