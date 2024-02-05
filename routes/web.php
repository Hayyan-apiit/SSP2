<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;


use App\Http\Controllers\pageController;

use App\Http\Controllers\GoogleController;
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


route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth','verified');

route::get('/view_category',[AdminController::class,'view_category']);

route::post('/add_category',[AdminController::class,'add_category']);

route::get('/delete_catagory/{id}',[AdminController::class,'delete_catagory']);

route::get('/view_garment',[AdminController::class,'view_garment']);

route::POST('/add',[AdminController::class,'add']);

route::get('/show_garment',[AdminController::class,'show_garment']);

route::get('/delete_store/{id}',[AdminController::class,'delete_store']);

route::get('/update_store/{id}',[AdminController::class,'update_store']);

Route::POST('/update_confirm/{id}', [AdminController::class, 'update_confirm']);

route::get('/user',[AdminController::class,'user']);


route::get('/dash',[AdminController::class,'dash']);


route::get('/show_order',[AdminController::class,'show_order']);


Route::get('/delivered/{id}', [AdminController::class, 'delivered']);

Route::get('/send_email/{id}', [AdminController::class, 'send_email']);

Route::POST('/send_user_email/{id}', [AdminController::class, 'send_user_email']);

Route::get('/complain', [AdminController::class, 'complain']);

//-----------search

route::get('/search',[AdminController::class,'searchdata']);


//-----------User page interaction 

route::get('/kid',[pageController::class,'kid']);

route::get('/contact',[pageController::class,'contact']);

Route::POST('/add_contact', [PageController::class, 'add_contact']);


route::get('/about',[pageController::class,'about']);

route::get('/men',[pageController::class,'men']);

route::get('/women',[pageController::class,'women']);

route::get('/shop',[pageController::class,'shop']);

route::get('/user',[pageController::class,'user']);

route::get('/checkout',[pageController::class,'checkout']);

route::get('/thankyou',[pageController::class,'thankyou']);

route::get('/store_details/{id}',[pageController::class,'store_details']);

Route::post('/cart/{id}', [PageController::class, 'cart']);

Route::get('/show_cart', [PageController::class, 'show_cart']);

Route::get('/remove_cart/{id}', [PageController::class, 'remove_cart']);

Route::get('/add_order', [PageController::class, 'add_order']);



//-----------stripe
// Route for GET method
Route::get('/stripe/{totalprice}', [PageController::class, 'stripe']);

// Route for POST method
Route::post('stripe/{totalprice}', [PageController::class,'stripePost'])->name('stripe.post');


route::get('/show_userorder',[pageController::class,'show_userorder']);

Route::get('/cancel_store/{id}', [pageController::class, 'cancel_store']);



//google

Route::get('auth/google', [GoogleController::class, 'googlepage']);

Route::get('auth/google/callback', [GoogleController::class, 'googlecallback']);