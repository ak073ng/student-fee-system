<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fee;
use App\Student;

class ViewRecordsController extends Controller
{
    //index
    public function index(){

        //calculate total fees paid by all students
        $total_fees = Fee::all()->sum('amount');
        
        //put comma after every 3 digits
        $total_fees_cleaned = implode(",", str_split((string)$total_fees, "3"));

        //get records from db
        $records = Student::all();

        return view('95242.view_records', ['total_fees' => $total_fees_cleaned, 'records' => $records]);
    }

    //get searched student
    public function getSearchedStudent(Request $request){

        //get student id from search input
        $search_for = request('search-student');

        //get record
        $records = Student::all()->where('student_id', '=', $search_for);

        if(!$records->isEmpty()){

            return view('95242.view_records', ['records' => $records]);

        }else{

            $response = "Student with the id number ". $search_for. " does not exist!";

            //makes view box visible
            $display_status = "block";

            return view('95242.view_records', [
                'records' => $records,
                'response' => $response, 
                'display_status' => $display_status]);

        }

        
    }
}
