<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\lab;
use App\Models\lab_category;
use App\Models\test;
use App\Models\booking;
use Illuminate\Support\Facades\DB;
class Admin_controller extends Controller
{
    public function Lab()
    {
    	return view('Lab/Lab');
    }
   

    public function Laboratory_registration()
    {
    	 return view('Lab/Laboratory_registration');
    }


    public function lab_insert(Request $req)
    {
    	$pt=new lab;
    	$pt->lab_name=$req->input('Name');
    	$pt->lab_email=$req->input('Email');
    	$pt->lab_phone=$req->input('Phone');
    	$pt->lab_password=$req->input('Password');
    	$pt->lab_address=$req->input('address');
    	$pt->save();
    	return redirect('/Lab');
    }


    public function Laboratory_login()
    {
    	 return view('Lab/Laboratory_login');
    }

    public function registered_patients()
    {
        if(session()->has('Email'))
        {
            $patient=patient::all();
        return view('Lab/registered_patients',compact('patient'));
        }
        else
        {
            return redirect('/Lab');
        }
    }
    public function payment_details()
    {
        if(session()->has('Email'))
        {
            $payment=DB::table('payments')->join('patients','payments.patient_id','=','patients.patient_id')->get();
        return view('Lab/payment_details',compact('payment'));
        }
        else
        {
            return redirect('/Lab');
        }
    }

    public function lab_Login_check(Request $req)
    {
    	$req->session()->put('Email',$req->input('Email'));
    	$count=lab::where([['lab_email',$req->input('Email')],['lab_password',$req->input('Password')]])->count();
    	if($count>0)
    	{
    		return redirect('/lab_profile');
    	}
    	else
    	{
    		return redirect('/Lab');
    	}
    }


    public function lab_profile()
    {
    	if(session()->has('Email'))
    	{
           $labs = lab::where('lab_email',session('Email'))->first(); 
        return view('Lab/lab_profile', compact('labs'));
    		
    	}
    	else
    	{
    		return redirect('/Lab');
    	}
    }
    public function test()
    {
        if(session()->has('Email'))
        {
            $category=lab_category::all();
            return view('Lab/test',compact('category'));
        }
        else
        {
            return redirect('/Lab');
        }
    }
    public function add_category()
    {
        if(session()->has('Email'))
        {
            return view('Lab/Lab_category');
        }
        else
        {
            return redirect('/Lab');
        }
    }
    public function Lab_profile_updation(Request $req)
    {
         $lab_updt=lab::where([['lab_email',session('Email')]])->first();
        $lab_updt->lab_name=$req->input('name');
        $lab_updt->lab_phone=$req->input('Phone');
        $lab_updt->lab_password=$req->input('Password');
        $lab_updt->lab_address=$req->input('address');
        $lab_updt->update();
        return redirect('/lab_profile');
    }
    public function category_insert(Request $req)
    {
        $obj=new lab_category;
        $obj->category_name=$req->input('cat_name');
        if($req->hasfile('cat_image'))
            {
              $file=$req->file('cat_image');
              $extension=$file->getClientOriginalExtension();
              $filename=time().'.'.$extension;
              $file->move('d_lab/Category/',$filename);
              $obj->category_image=$filename;
            }
        $obj->save();
        return redirect('/add_category');
    }
    public function test_insert(Request $req)
    {
        $test1=new test;
        $test1->category_id=$req->input('category_id');
         $test1->test_name=$req->input('test_name');   
         $test1->test_price=$req->input('test_price'); 
         $test1->test_description=$req->input('test_description');   
        if($req->hasfile('test_image'))
            {
              $file=$req->file('test_image');
              $extension=$file->getClientOriginalExtension();
              $filename=time().'.'.$extension;
              $file->move('d_lab/Test/',$filename);
              $test1->test_image=$filename;
            }
        $test1->save();
         return redirect('/test');
    }
    public function manage_category()
    {
         if(session()->has('Email'))
        {
           $category=lab_category::all();
          return view('Lab/manage_category',compact('category'));
           }
        else
        {
            return redirect('/Lab');
        }
    }
     public function manage_test()
    {
         if(session()->has('Email'))
        {
           $test=test::all();
          return view('Lab/manage_test',compact('test'));
           }
        else
        {
            return redirect('/Lab');
        }
    }
    public function test_delete(Request $req,$test_id)
    {
        $test_del=test::where([['test_id',$test_id]])->first();
        $test_del->delete();
        return redirect('manage_test');
    }
    public function test_fetch(Request $req,$test_id)
    {   
          $tst_fetch=test::where([['test_id',$test_id]])->first();
         return view('Lab/update_test',compact('tst_fetch'));
    }
    
    public function test_update(Request $req,$test_id)
    {
        $test1=test::where([['test_id',$test_id]])->first();
       
         $test1->test_name=$req->input('test_name');   
         $test1->test_price=$req->input('test_price'); 
         $test1->test_description=$req->input('test_description');   
        if($req->hasfile('test_image'))
            {
              $file=$req->file('test_image');
              $extension=$file->getClientOriginalExtension();
              $filename=time().'.'.$extension;
              $file->move('d_lab/Test/',$filename);
              $test1->test_image=$filename;
            }
        $test1->update();
         return redirect('/manage_test');
    }


    public function verify_booking()
    {
        if(session()->has('Email'))
        {
            $bking=booking::all();
        return view('Lab/verify_booking',compact('bking'));
        }
        else
        {
            return redirect('/Lab');
        }
    }

    
    


    public function category_delete($cat_id)
    {
        $category=lab_category::where([['category_id',$cat_id]])->first();
        $category->delete();
        return redirect('/manage_category');
    }
    public function edit_category($cat_id)
    {
        if(session()->has('Email'))
        {
            $category=lab_category::where([['category_id',$cat_id]])->first();
            return view('Lab/edit_category',compact('category'));
        }
        else
        {
            return redirect('/Lab');
        }
    }
    public function update_category($cat_id,Request $req)
    {
        $category=lab_category::where([['category_id',$cat_id]])->first();
        $category->category_name=$req->input('cat_name');
        if($req->hasfile('cat_image'))
            {
              $file=$req->file('cat_image');
              $extension=$file->getClientOriginalExtension();
              $filename=time().'.'.$extension;
              $file->move('d_lab/Category/',$filename);
              $category->category_image=$filename;
            }
            $category->update();
            return redirect('/manage_category');

    }
    public function approve_booking($booking_id)
    {
        $bking=booking::where([['booking_id',$booking_id]])->first();
         $bking->booking_status="Approved";
         $bking->update();
         return redirect('verify_booking');
    }
    public function reject_booking($booking_id)
    {
        $reject_bking=booking::where([['booking_id',$booking_id]])->first();
        $reject_bking->booking_status="Rejected";
        $reject_bking->update();
        return redirect('verify_booking');
            }
    
    
}

