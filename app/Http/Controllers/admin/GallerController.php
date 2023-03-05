<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Gallery;
use App\Models\Gallery as ModelsGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GallerController extends Controller
{

    public function get_all_gallery ()
    {
     $Gallery=ModelsGallery::all();
     return view('admin.Gallery',compact('Gallery'));

    }

    public function save_galley(Request $request,$id)
    {

$ModelsGallery= ModelsGallery::find($id);

if($request->file('img')){

    $validator = Validator::make($request->all(), [
        'img' => 'mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg',

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
            $ModelsGallery->img= $new_au;


    }


}


$ModelsGallery->save();


$notification = array('message' => 'successfully', 'alert_type' => 'success');

return redirect()->back()->with($notification);



    }


}
