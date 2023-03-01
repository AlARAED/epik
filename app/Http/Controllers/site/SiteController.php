<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\BrandWinter;
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
<<<<<<< HEAD
        $ads=Ads::find(1);
        $BrandWinter=BrandWinter::where('type',1)->get();

        return view('site.winter',compact('ads','BrandWinter'));
=======
         $setting = Setting::all();

        return view('site.winter',compact('setting'));
>>>>>>> 667a2dcd09046c8c2243dc7cd34fe2b0ba3c0f27
    }

    public function price()
    {

        $prices=PriceWinter::all();



        return view('site.price',compact('prices'));
    }


}
