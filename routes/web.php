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

    Route::get('/settingsite', [App\Http\Controllers\admin\SettingsiteController::class,'setting_site'])->name('setting');
    Route::post('/saveseettings', [App\Http\Controllers\admin\SettingsiteController::class,'saveseettings'])->name('saveseettings');
    Route::get('/boxsommer', [App\Http\Controllers\admin\SettingsiteController::class,'boxsommer'])->name('boxsommer');
    Route::get('/Gallery', [App\Http\Controllers\admin\GallerController::class,'get_all_gallery'])->name('Gallery');
    Route::post('/save_galley/{id}', [App\Http\Controllers\admin\GallerController::class,'save_galley']);

//all main product sommer
    Route::get('/Mainproductsommer', [App\Http\Controllers\admin\MainCategoryProductSommer::class,'get_all_product_sommer'])->name('get_all_product_sommer');
    Route::post('/save_product', [App\Http\Controllers\admin\MainCategoryProductSommer::class,'save_product'])->name('save_product');
    Route::post('/Delete_product/{id}', [App\Http\Controllers\admin\MainCategoryProductSommer::class,'Delete_product']);



//all sub category product
Route::get('/subproductsommer', [App\Http\Controllers\admin\SubCategoryProductSommer::class,'get_all_sub_cateproduct_sommer'])->name('subproductsommer');
Route::post('/save_subcategory_product', [App\Http\Controllers\admin\SubCategoryProductSommer::class,'save_subcategory_product'])->name('save_subcategory_product');
Route::post('/Delete_subcategory_product/{id}', [App\Http\Controllers\admin\SubCategoryProductSommer::class,'Delete_subcategory_product']);

//end sub category product

//contact us
Route::get('/Contact_us', [App\Http\Controllers\admin\ContactUsController::class,'get_all_contact_us'])->name('Contact_us');


    Route::get('/setting', [App\Http\Controllers\SettingController::class,'index'])->name('setting');
    Route::get('/settingcreate', [App\Http\Controllers\SettingController::class,'create'])->name('settingcreate');
    Route::post('/settingstore', [App\Http\Controllers\SettingController::class,'store'])->name('settingstore');
    //Route::post('/settingdestroy', [App\Http\Controllers\SettingController::class,'destroy'])->name('settingdestroy');
    Route::post('/settingdestroy/{id}', [App\Http\Controllers\SettingController::class,'settingdestroy']);


    Route::get('/settingshow/{id}', [App\Http\Controllers\SettingController::class,'show'])->name('settingshow');
    Route::get('/settingedit/{id}', [App\Http\Controllers\SettingController::class,'edit'])->name('settingedit');

    Route::post('/settingupdate/{id}', [App\Http\Controllers\SettingController::class,'update'])->name('settingupdate');


      Route::get('/logo', [App\Http\Controllers\ImageController::class,'index'])->name('logo');
    Route::get('/logocreate', [App\Http\Controllers\ImageController::class,'create'])->name('logocreate');
    Route::post('/logostore', [App\Http\Controllers\ImageController::class,'store'])->name('logostore');
    Route::post('/logodestroy/{id}', [App\Http\Controllers\ImageController::class,'logodestroy']);


    Route::get('/logoshow/{id}', [App\Http\Controllers\SettingController::class,'show'])->name('logoshow');
    Route::get('/logoedit/{id}', [App\Http\Controllers\SettingController::class,'edit'])->name('logoedit');

    Route::post('/logoupdate/{id}', [App\Http\Controllers\SettingController::class,'update'])->name('logoupdate');


});





});


Auth::routes();

Route::get('/', [App\Http\Controllers\site\SiteController::class,'index'])->name('index');
Route::get('/sommer', [App\Http\Controllers\site\SiteController::class,'sommer'])->name('sommer');
Route::get('/winter', [App\Http\Controllers\site\SiteController::class,'winter'])->name('winter');
Route::get('/price', [App\Http\Controllers\site\SiteController::class,'price'])->name('price');
Route::get('/sommer-prices', [App\Http\Controllers\site\SiteController::class,'sommer_prices'])->name('sommer_prices');
Route::get('/contact-us', [App\Http\Controllers\site\SiteController::class,'contact_us'])->name('contactus');

Route::post('/save_Contact_us', [App\Http\Controllers\admin\ContactUsController::class,'save_Contact_us'])->name('save_Contact_us');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/CONNECT', [App\Http\Controllers\site\SiteController::class,'CONNECT'])->name('CONNECT');


