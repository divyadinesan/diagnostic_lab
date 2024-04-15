<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\lab_category;
use App\Models\test;
use App\Models\booking;
use App\Models\payment;
class Patient_controller extends Controller
{
   

    public function patient_insert(Request $req)
    {
    	$pt=new patient;
    	$pt->p_name=$req->input('Name');
    	$pt->p_email=$req->input('Email');
    	$pt->p_phone=$req->input('phone');
    	$pt->p_password=$req->input('Password');
    	$pt->p_address=$req->input('address');
    	$pt->save();
    	return redirect('/Lab');
    }


    public function Login_check(Request $req)
    {
    	$req->session()->put('Email',$req->input('Email'));
    	$count=patient::where([['p_email',$req->input('Email')],['p_password',$req->input('Password')]])->count();
    	if($count>0)
    	{
    		return redirect('/Patient_home');
    	}
    	else
    	{
    		return redirect('/Lab');
    	}
    }


    public function patient_profile()
    {
        if(session()->has('Email'))
        {
        $patient=patient::where([['p_email',session('Email')]])->first();
        return view('Patient/Myprofile',compact('patient'));
        }
        else
        {
            return redirect('/Lab');
        }
    }
   
    public function patient_profile_update(Request $req)
    {
        $patient=patient::where([['p_email',session('Email')]])->first();
        $patient->p_name=$req->input('name');
        $patient->p_phone=$req->input('Phone');
        $patient->p_password=$req->input('Password');
        $patient->p_address=$req->input('address');
        $patient->update();
        return redirect('/patient_profile');
    }

     public function Patient_home()
    {
        if(session()->has('Email'))
        {
            $category=lab_category::all();
            return view('Patient/Patient_home',compact('category'));
        }
        else
        {
            return redirect('/Lab');
        }
    }

    public function fetch_test($category_id)
    {
        if(session()->has('Email'))
        {
            $tst=test::where([['category_id',$category_id]])->get();
            return view('Patient/test',compact('tst'));
        }
        else
        {
            return redirect('/Lab');
        }
    }

    public function booking($test_id)
    {
        if(session()->has('Email'))
        {
            $patient=patient::where([['p_email',session('Email')]])->first(); 
             $tst=test::where([['test_id',$test_id]])->first();
            return view('Patient/booking',compact('patient','tst'));
        }
        else
        {
            return redirect('/Lab');
        }
    }
    public function booking_insert(Request $req)
    {
        $bking=new booking;                  
        $bking->test_id=$req->input('test_id');
        $bking->patient_id=$req->input('patient_id');
        $bking->patient_email=$req->input('patient_email');
        $bking->patient_name =$req->input('Name');
        $bking->test_name=$req->input('testName');
        $bking->test_price=$req->input('test_price');
        $bking->booking_date=$req->input('booking_date');
        $bking->booking_time  =$req->input('booking_time');
        $bking->booking_status="Pending";
        $bking->save();
        return redirect('/mybooking');
    }

    public function mybooking()
    {
        if(session()->has('Email'))
        {
        $mybooking=booking::where([['patient_email',session('Email')]])->get();
        return view('Patient/mybooking',compact('mybooking'));
        }
        else
        {
            return redirect('/Lab');
        }
    }

    public function payment($booking_id)
    {
        if(session()->has('Email'))
        {
            $bking=booking::where([['booking_id',$booking_id]])->first();
            return view('Patient/payment',compact('bking'));
        }
        else
        {
            return redirect('/Lab');
        }
    }

    public function payment_insert(Request $req)
    {
        $pay=new payment;
        $pay->booking_id=$req->input('booking_id');
                   
         $pay->test_id=$req->input('test_id');
          $pay->test_name=$req->input('test_name');
           $pay->patient_id=$req->input('patient_id');
            $pay->price=$req->input('price');
             $pay->card_name=$req->input('card_name');
              $pay->card_number=$req->input('card_number');
               $pay->cvc=$req->input('cvc');
                $pay->expiry_date=$req->input('expirydate');
                $result=$pay->save();
                if($result==1){
                   $payed=booking::where([['booking_id',$req->input('booking_id')]])->first();
                   $payed->booking_status="Payment Completed";
                   $payed->update();
                   return redirect('mybooking');
                }


    }
    public function patient_signout(Request $req)
    {
        $req->session()->forget('Email');
        return redirect('/Lab');
    }
}
