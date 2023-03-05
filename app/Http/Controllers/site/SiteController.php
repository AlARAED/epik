<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\Box;
use App\Models\BrandWinter;
use App\Models\Gallery;
use App\Models\MainCategoryProductSomer;
use App\Models\PriceWinter;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\SubCategoryProductSomer;
use Illuminate\Support\Facades\Http;

class SiteController extends Controller
{


    public function index()
    {


        return view('site.index');
    }


    public function sommer()
    {
        $setting = Setting::find(1);
        $BrandWinter=BrandWinter::where('type',2)->get();
        $Gallery=Gallery::where('type',2)->get();



        $respones = Http::get('https://api.openweathermap.org/data/2.5/weather?q=Ellmau&appid=63348049b2ce5d355e69035f89eca7b5&units=metric');
        $responesfuture = Http::get('https://api.openweathermap.org/data/2.5/forecast?lat=34&lon=118&cnt=5&appid=63348049b2ce5d355e69035f89eca7b5&units=metric
        ');
        $current=$respones->json();
        $future=$responesfuture->json();




        //   dd($setting[0]->address);


        return view('site.sommer',compact('setting','BrandWinter','Gallery','current','future'));
    }

    public function winter()
    {





        $ads=Ads::find(1);
        $BrandWinter=BrandWinter::where('type',1)->get();

         $setting = Setting::find(1);


         $respones = Http::get('https://api.openweathermap.org/data/2.5/weather?q=Ellmau&appid=63348049b2ce5d355e69035f89eca7b5&units=metric');
         $responesfuture = Http::get('https://api.openweathermap.org/data/2.5/forecast?lat=34&lon=118&cnt=5&appid=63348049b2ce5d355e69035f89eca7b5&units=metric
         ');
         $current=$respones->json();
         $future=$responesfuture->json();


        return view('site.winter',compact('ads','BrandWinter','setting','current','future'));
    }

    public function price()
    {

        $prices=PriceWinter::all();


        $setting=Setting::find(1);
        $respones = Http::get('https://api.openweathermap.org/data/2.5/weather?q=Ellmau&appid=63348049b2ce5d355e69035f89eca7b5&units=metric');
        $responesfuture = Http::get('https://api.openweathermap.org/data/2.5/forecast?lat=34&lon=118&cnt=5&appid=63348049b2ce5d355e69035f89eca7b5&units=metric
        ');
        $current=$respones->json();
        $future=$responesfuture->json();

        return view('site.price',compact('prices','setting','current','future'));
    }
    public function  sommer_prices()
    {

        $setting = Setting::find(1);
       $MainCategoryProductSomer= MainCategoryProductSomer::with('subcategories')->get();
        $mainproduct=SubCategoryProductSomer::with('maincatego')->get();
        $respones = Http::get('https://api.openweathermap.org/data/2.5/weather?q=Ellmau&appid=63348049b2ce5d355e69035f89eca7b5&units=metric');
        $responesfuture = Http::get('https://api.openweathermap.org/data/2.5/forecast?lat=34&lon=118&cnt=5&appid=63348049b2ce5d355e69035f89eca7b5&units=metric
        ');
        $current=$respones->json();
        $future=$responesfuture->json();

        return view('site.sommer-prices',compact('setting','mainproduct','MainCategoryProductSomer','current','future'));
    }

    public function      contact_us()
    {
        $setting=Setting::find(1);

        $respones = Http::get('https://api.openweathermap.org/data/2.5/weather?q=Ellmau&appid=63348049b2ce5d355e69035f89eca7b5&units=metric');
        $responesfuture = Http::get('https://api.openweathermap.org/data/2.5/forecast?lat=34&lon=118&cnt=5&appid=63348049b2ce5d355e69035f89eca7b5&units=metric
        ');
        $current=$respones->json();
        $future=$responesfuture->json();

        return view('site.contact-us',compact('setting','current','future'));
    }

}
