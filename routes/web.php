<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/MyFirst', function () {
    return view('first');
});

Route::get('/MySecond', function () {
    return view('second');
});

use App\http\controllers\studycontroller;

Route::get('/Myprofile',[studycontroller::class,'show']);
Route::get('/Myprofile2',[studycontroller::class,'show2']);

Route::get('/Registration', function () {
    return view('registration');
});
use App\http\controllers\adminController;
use App\http\controllers\userheaderController;
Route::get('/adminIndex',[adminController::class,'display']);
Route::get('/login',[adminController::class,'create']);
Route::post('/store',[adminController::class,'store']);
Route::get('/signup',[adminController::class,'newadmin']);
Route::post('/submit',[adminController::class,'submit']);
Route::get('/aboutus',[userheaderController::class,'aboutus']);
Route::get('/showorders',[adminController::class,'show']);

//Route::resource('admin',adminController::class);
use App\http\controllers\OccasionController;
Route::resource('occasion',OccasionController::class);

use App\http\controllers\faqController;
Route::resource('faq',faqController::class);

//use App\http\controllers\userheaderController;
Route::resource('userheader',userheaderController::class);
Route::get('/contactus',[userheaderController::class,'contactus']);
Route::get('userheader2',[userheaderController::class,'userheader2']);

use App\http\controllers\categoryController;
Route::resource('category',categoryController::class);

use App\http\controllers\productController;
Route::resource('product',productController::class);

use App\http\controllers\cartController;
Route::resource('cart',cartController::class);

// use App\http\controllers\userheaderController;
// Route::resource('aboutus',aboutusController::class);

use App\http\controllers\userhomeController;
Route::resource('userhome',userhomeController::class);
Route::get('/viewcart',[userhomeController::class,'viewcart']);
Route::get('/checkout',[userhomeController::class,'checkout']);
Route::get('/homet',[userhomeController::class,'index']);
Route::get('/search',[userhomeController::class,'search']);