<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ImageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {

    Route::group(['middleware' => 'auth'], function () {



    Route::get('/home', [App\Http\Controllers\HomeadminController::class,'index'])->name('home');
    Route::get('/allpricewinter', [App\Http\Controllers\admin\PriceWinterController::class,'get_all_pricewinter'])->name('allpricewinter');
    Route::post('/save_price_product', [App\Http\Controllers\admin\PriceWinterController::class,'save_price_product'])->name('save_price_product');
    Route::post('/update_price_product/{id}', [App\Http\Controllers\admin\PriceWinterController::class,'update_price_product']);
    Route::post('/Delete_price_product/{id}', [App\Http\Controllers\admin\PriceWinterController::class,'Delete_price_product']);
    Route::get('/All_ads', [App\Http\Controllers\admin\AdsController::class,'All_ads'])->name('All_ads');
    Route::get('/allBrand', [App\Http\Controllers\admin\BrandWinterController::class,'get_all_brand'])->name('get_all_brand');
    Route::post('/save_brand', [App\Http\Controllers\admin\BrandWinterController::class,'save_brand'])->name('save_brand');

    Route::post('/Delete_brand/{id}', [App\Http\Controllers\admin\BrandWinterController::class,'Delete_brand']);



    Route::post('/update_ads', [App\Http\Controllers\admin\AdsController::class,'update_ads'])->name('update_ads');






//  Route::resource('setting', SettingController::class);

//  Route::resource('logo', ImageController::class);


// Route::get('/image', [ImageController::class,'index'])->name('image.index');
// Route::post('/image', [ImageController::class,'store'])->name('image.store');
});





});


Auth::routes();

Route::get('/index', [App\Http\Controllers\site\SiteController::class,'index'])->name('index');
Route::get('/sommer', [App\Http\Controllers\site\SiteController::class,'sommer'])->name('sommer');
Route::get('/winter', [App\Http\Controllers\site\SiteController::class,'winter'])->name('winter');
Route::get('/price', [App\Http\Controllers\site\SiteController::class,'price'])->name('price');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
