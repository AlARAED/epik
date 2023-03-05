<?php

namespace App\Http\Controllers;

use App\Models\BrandWinter;
use App\Models\ContactUs;
use App\Models\MainCategoryProductSomer;
use App\Models\PriceWinter;
use Illuminate\Http\Request;

class HomeadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $PriceWintercount= PriceWinter::count();
        $productsommer=MainCategoryProductSomer::count();
        $brand=BrandWinter::count();
        $ContactUs=ContactUs::count();



         return view('admin.homedasborad',compact('PriceWintercount','productsommer','brand','ContactUs'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

}
