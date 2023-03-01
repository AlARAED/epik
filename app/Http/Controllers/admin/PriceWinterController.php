<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PriceWinter;
use Illuminate\Http\Request;

class PriceWinterController extends Controller
{
 public function get_all_pricewinter()
 {
  $prices=PriceWinter::all();
  return view('admin.allproductwinter',compact('prices'));
 }
 public function save_price_product(Request $request)
 {
     $PriceWinter = new PriceWinter();
     $PriceWinter->title=$request->title;
     $PriceWinter->first_day=$request->first_day;
     $PriceWinter->second_day=$request->second_day;
     $PriceWinter->thirs_day=$request->thirs_day;
     $PriceWinter->fourth_day=$request->fourth_day;
     $PriceWinter->fifth_day=$request->fifth_day;
    $PriceWinter->sixth_siventh_day=$request->sixth_siventh_day;
    $PriceWinter->inventy_day=$request->inventy_day;
    $PriceWinter->save();
    $notification = array('message' => 'successfully', 'alert_type' => 'success');
       return redirect()->back()->with($notification);


}




public function update_price_product(Request $request ,$id)
{
    $PriceWinter = PriceWinter::find($id);
    $PriceWinter->title=$request->title;
    $PriceWinter->first_day=$request->first_day;
    $PriceWinter->second_day=$request->second_day;
    $PriceWinter->thirs_day=$request->thirs_day;
    $PriceWinter->fourth_day=$request->fourth_day;
    $PriceWinter->fifth_day=$request->fifth_day;
   $PriceWinter->sixth_siventh_day=$request->sixth_siventh_day;
   $PriceWinter->inventy_day=$request->inventy_day;
   $PriceWinter->save();

   $notification = array('message' => 'changes successfully', 'alert_type' => 'success');
      return redirect()->back()->with($notification);


}



public function Delete_price_product(Request $request ,$id)
{
    $PriceWinter = PriceWinter::find($id);
    $PriceWinter->delete();


   $notification = array('message' => 'removed successfully', 'alert_type' => 'success');
      return redirect()->back()->with($notification);


}

}



