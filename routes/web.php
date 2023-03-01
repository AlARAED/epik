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



    Route::get('/setting', [App\Http\Controllers\SettingController::class,'index'])->name('setting');
    Route::get('/settingcreate', [App\Http\Controllers\SettingController::class,'create'])->name('settingcreate');
    Route::post('/settingstore', [App\Http\Controllers\SettingController::class,'store'])->name('settingstore');
    //Route::post('/settingdestroy', [App\Http\Controllers\SettingController::class,'destroy'])->name('settingdestroy');
    Route::post('/settingdestroy/{id}', [App\Http\Controllers\SettingController::class,'settingdestroy']);


    Route::get('/settingshow/{id}', [App\Http\Controllers\SettingController::class,'show'])->name('settingshow');
    Route::get('/settingedit/{id}', [App\Http\Controllers\SettingController::class,'edit'])->name('settingedit');

  //  Route::post('/settingupdate/{id}', [App\Http\Controllers\SettingController::class,'update'])->name('settingupdate');
    Route::post('/settingupdate/{id}', [App\Http\Controllers\SettingController::class,'update'])->name('settingupdate');


   // Route::resource('setting', SettingController::class);

 //  Route::resource('logo', ImageController::class);

      Route::get('/logo', [App\Http\Controllers\ImageController::class,'index'])->name('logo');
    Route::get('/logocreate', [App\Http\Controllers\ImageController::class,'create'])->name('logocreate');
    Route::post('/logostore', [App\Http\Controllers\ImageController::class,'store'])->name('logostore');
    //Route::post('/settingdestroy', [App\Http\Controllers\SettingController::class,'destroy'])->name('settingdestroy');
    Route::post('/logodestroy/{id}', [App\Http\Controllers\ImageController::class,'logodestroy']);


    Route::get('/logoshow/{id}', [App\Http\Controllers\SettingController::class,'show'])->name('logoshow');
    Route::get('/logoedit/{id}', [App\Http\Controllers\SettingController::class,'edit'])->name('logoedit');

  //  Route::post('/settingupdate/{id}', [App\Http\Controllers\SettingController::class,'update'])->name('settingupdate');
    Route::post('/logoupdate/{id}', [App\Http\Controllers\SettingController::class,'update'])->name('logoupdate');
      
        
        
        
        
        

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
