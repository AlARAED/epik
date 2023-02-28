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
//شمشش


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
