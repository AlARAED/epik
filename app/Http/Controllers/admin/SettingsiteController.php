<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsiteController extends Controller
{
   public function setting_site()
   {
    $Setting=Setting::find(1);
    return view('admin.setting',compact('Setting'));

   }

   public function boxsommer()
   {
    $Setting=Setting::find(1);
    return view('admin.box',compact('Setting'));

   }


   public function saveseettings(Request $request)
   {


$Setting= Setting::find(1);
if($request->title){


$Setting->title=$request->title;
}

if($request->phone){
$Setting->phone=$request->phone;

}

if($request->address){

$Setting->address=$request->address;
}
if($request->fb){
$Setting->fb=$request->fb;
}
if($request->inst){
$Setting->inst=$request->inst;
}

if($request->wats){
$Setting->wats=$request->wats;
}


if($request->booking_link){


$Setting->booking_link=$request->booking_link;
}
if($request->box1){

$Setting->box1=$request->box1;
}


if($request->box2){

$Setting->box2=$request->box2;
}

if($request->box3){

$Setting->box3=$request->box3;
}


if($request->texthomesite){

    $Setting->texthomesite=$request->texthomesite;
    }



       if($request->file('logo_winter')){

           $validator = Validator::make($request->all(), [
               'logo_winter' => 'mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg',


           ]);

           if ($validator->fails()) {
               return redirect()->back()
                           ->withErrors($validator)
                           ->withInput();
           }




           if (isset($request->logo_winter)) {


               $ext = pathinfo($request->logo_winter->getClientOriginalName(),
                   PATHINFO_EXTENSION);
                   $new_a = uniqid() . "." . $ext;
                   $path = $request->logo_winter->move('uploads', $new_a);
                   $Setting->logo_winter= $new_a;


           }

       }


       if($request->file('logo_sommer')){

        $validator = Validator::make($request->all(), [
            'logo_sommer' => 'mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg',


        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }




        if (isset($request->logo_sommer)) {
            $ext = pathinfo($request->logo_sommer->getClientOriginalName(),
                PATHINFO_EXTENSION);
                $new_au = uniqid() . "." . $ext;
                $path = $request->logo_sommer->move('uploads', $new_au);
                $Setting->logo_sommer= $new_au;


        }

    }


       $Setting->save();

       $notification = array('message' => 'successfully', 'alert_type' => 'success');

       return redirect()->back()->with($notification);
   }


}
