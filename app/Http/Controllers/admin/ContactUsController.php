<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{


    public function get_all_contact_us ()
    {
     $contactus=ContactUs::all();
     return view('admin.contact_us',compact('contactus'));

    }



    public function save_Contact_us(Request $request)
    {

         $ContactUs= new ContactUs();


            $ContactUs->name= $request->name;
            $ContactUs->email= $request->email;
            $ContactUs->text= $request->text;


             $ContactUs->save();


  			$notification = array(
                'message' => 'Successfully Send to adminstrator!',
                'alert-type' => 'success'
            );


        return back()->with($notification);
    }



}
