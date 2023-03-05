<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MainCategoryProductSomer;
use App\Models\SubCategoryProductSomer;
use Illuminate\Http\Request;

class SubCategoryProductSommer extends Controller
{

    public function get_all_sub_cateproduct_sommer()
    {
     $SubCategoryProductSomer=SubCategoryProductSomer::all();
     $MainCategoryProductSomer=MainCategoryProductSomer::all();

     return view('admin.SubCategoryProductSomer',compact('SubCategoryProductSomer','MainCategoryProductSomer'));

    }



    public function save_subcategory_product(Request $request)
    {

         $SubCategoryProductSomer= new SubCategoryProductSomer();


            $SubCategoryProductSomer->category_name= $request->category_name;
            $SubCategoryProductSomer->text= $request->text;
            $SubCategoryProductSomer->main_category_id= $request->main_category_id;


             $SubCategoryProductSomer->save();
             $notification = array('message' => 'successfully', 'alert_type' => 'success');


        return redirect()->back()->with($notification);
    }



 public function Delete_subcategory_product(Request $request ,$id)
    {
        $BrandWinter = SubCategoryProductSomer::find($id);
        $BrandWinter->delete();
        $notification = array('message' => 'removed successfully', 'alert_type' => 'success');

          return redirect()->back()->with($notification);


    }

}
