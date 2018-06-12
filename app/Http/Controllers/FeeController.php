<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fee;
use App\Student;

class FeeController extends Controller
{
    //index
    public function index(){
        return view('95242.fee');
    }

    //insert new fee payment
    public function insertNewFee(){

        //get input data from form
        $student_id = request('student-number');
        $amount = request('amount');
        $date = request('payment-date');

        //check if input student_id exists in system
        $student_exists = Student::all()->where('student_id', '=', $student_id)->first();

        //if not empty, then student exists
        //insert input fee payment
        if($student_exists != null){

            //insert new fee payment record to db
            $fee_payment = new Fee();
            $fee_payment->student_id = $student_id;
            $fee_payment->amount = $amount;
            $fee_payment->payment_date = $date;
            $fee_payment->save();  

            return redirect('/view/'.$student_id);

        }else{

            $response = "Student with the id number ". $student_id. " does not exist!";

            //makes view box visible
            $display_status = "block";

            return view('95242.fee', ['response' => $response, 'display_status' => $display_status]);

        }
        
    }
}
