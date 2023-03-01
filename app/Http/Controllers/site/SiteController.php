<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\BrandWinter;
use App\Models\PriceWinter;
use Illuminate\Http\Request;

class SiteController extends Controller
{


    public function index()
    {

        return view('site.index');
    }


    public function sommer()
    {

        return view('site.sommer');
    }

    public function winter()
    {
        $ads=Ads::find(1);
        $BrandWinter=BrandWinter::where('type',1)->get();

        return view('site.winter',compact('ads','BrandWinter'));
    }

    public function price()
    {

        $prices=PriceWinter::all();



        return view('site.price',compact('prices'));
    }


}
