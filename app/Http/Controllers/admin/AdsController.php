<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function All_ads()
    {

        $ads=Ads::find(1);
        return view('admin.Adss',compact('ads'));
    }



     public function update_ads(Request $request)
    {

        $ads=Ads::find(1);

        if($request->file('img1')){



            $request->validate([
                'image.*' => 'mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg',

            ]);


            if (isset($request->img1)) {
                $ext = pathinfo($request->img1->getClientOriginalName(),
                    PATHINFO_EXTENSION);
                if ($ext == "png" || $ext == "jpg" || $ext == "gif") {

                    $new_au = uniqid() . "." . $ext;


                    $path = $request->img1->move('uploads', $new_au);
                    $ads->img1 = $new_au;

                }
            }




        }

        if($request->file('img2')){

            $ext = pathinfo($request->img2->getClientOriginalName(),
            PATHINFO_EXTENSION);
        if ($ext == "png" || $ext == "jpg" || $ext == "gif") {

            $new_au = uniqid() . "." . $ext;


            $path = $request->img2->move('uploads', $new_au);
            $ads->img2 = $new_au;

        }

        }

        $ads->save();
        $ads=Ads::find(1);


        return redirect()->route('All_ads');
    }




    //شمشش
}
