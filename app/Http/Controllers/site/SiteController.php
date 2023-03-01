<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
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

        return view('site.winter');
    }

    public function price()
    {

        $prices=PriceWinter::all();
        return view('site.price',compact('prices'));
    }


}
