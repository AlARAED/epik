<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BrandWinter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandWinterController extends Controller
{


    public function get_all_brand ()
    {
     $BrandWinter=BrandWinter::all();
     return view('admin.brandwinter',compact('BrandWinter'));

    }

    public function save_brand(Request $request)
    {

$brandwinter= new BrandWinter();


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
                    $brandwinter->img= $new_au;


            }


            $brandwinter->type= $request->type;




        }


        $brandwinter->save();


        return redirect()->back();
    }


    public function Delete_brand(Request $request ,$id)
    {
        $BrandWinter = BrandWinter::find($id);
        $BrandWinter->delete();
          return redirect()->back();


    }

}
