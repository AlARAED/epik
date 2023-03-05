<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MainCategoryProductSomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainCategoryProductSommer extends Controller
{

    public function get_all_product_sommer()
    {
     $MainCategoryProductSomer=MainCategoryProductSomer::all();
     return view('admin.MainCategoryProductSommer',compact('MainCategoryProductSomer'));

    }



    public function save_product(Request $request)
    {

         $MainCategoryProductSomer= new MainCategoryProductSomer();


        if($request->file('img')){

            $validator = Validator::make($request->all(), [
                'img' => 'required|mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg',

            ]);

            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }




            if (isset($request->img)) {
                $ext = pathinfo($request->img->getClientOriginalName(),
                    PATHINFO_EXTENSION);
                    $new_au = uniqid() . "." . $ext;
                    $path = $request->img->move('uploads', $new_au);
                    $MainCategoryProductSomer->img= $new_au;


            }


            $MainCategoryProductSomer->title= $request->title;




        }


        $MainCategoryProductSomer->save();

        $notification = array('message' => 'successfully', 'alert_type' => 'success');

        return redirect()->back()->with($notification);
    }



    public function Delete_product(Request $request ,$id)
    {
        $BrandWinter = MainCategoryProductSomer::find($id);
        $BrandWinter->delete();
        $notification = array('message' => 'removed successfully', 'alert_type' => 'success');


          return redirect()->back()->with($notification);


    }


}
