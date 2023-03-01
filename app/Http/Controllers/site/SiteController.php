<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\PriceWinter;
use Illuminate\Http\Request;
use App\Models\Setting;
class SiteController extends Controller
{


    public function index()
    {

        return view('site.index');
    }


    public function sommer()
    {
         $setting = Setting::all();
    //   dd($setting[0]->address);
         

        return view('site.sommer',compact('setting'));
    }

    public function winter()
    {
         $setting = Setting::all();

        return view('site.winter',compact('setting'));
    }

    public function price()
    {

        $prices=PriceWinter::all();
        return view('site.price',compact('prices'));
    }


}
