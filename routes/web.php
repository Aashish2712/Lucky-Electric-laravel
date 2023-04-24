<?php

use App\Http\Controllers\Logincontroller;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\Signupcontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Cartcontroller;
use App\Http\Controllers\Contactcontroller;
use App\Http\Controllers\Ordercontroller;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;

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
// Routes for product page
Route::get('/', [ProductController::class, 'index']);
Route::get('product', [ProductController::class, 'show_product']);
Route::get('product/{field}', [ProductController::class, 'show']);
Route::post('product/search', [ProductController::class, 'search']);
Route::get('products/{id}', [ProductController::class, 'pro_desc']);

// Routes for page Display
Route::get('about', function () {
    return view('about');
});

// Routes for contact page
Route::get('contact', [Contactcontroller::class, 'index']);
Route::post('contact', [Contactcontroller::class, 'contactus']);


// Routes for cart page
Route::get('cart', [Cartcontroller::class, 'index']);
Route::post('address', [Cartcontroller::class, 'address_save']);
Route::get('cart/{id}', [CartController::class, 'Add_pro']);
Route::get('/cart/increment/{id}', [CartController::class, 'incre_q']);
Route::get('/cart/decrement/{id}', [CartController::class, 'decre_q']);
Route::get('/cart/remove/{id}', [CartController::class, 'remove_q']);



Route::get('checkout', [Cartcontroller::class, 'confirm_order']);
Route::post('payment', [Cartcontroller::class, 'pay_process']);
// Route::get('success', [Cartcontroller::class, 'result']);

Route::get('profile', function () {
    return view('profile');
});
Route::get('order', [Ordercontroller::class, 'index']);
Route::get('cancel/{p_id}/{od_id}', [OrderController::class, 'cancel_order']);



//Routes for User Login and Signup
Route::get('register', [Signupcontroller::class, 'Signup']);
Route::post('register', [Signupcontroller::class, 'Create']);
Route::get('resend', [Signupcontroller::class, 'resend']);
Route::get('forgot', [Signupcontroller::class, 'forgot']);
Route::post('reset', [Signupcontroller::class, 'reset']);
Route::post('forgot', [Signupcontroller::class, 'resend']);
Route::get('login', [Signupcontroller::class, 'Showlogin']);
Route::get('verify', [Signupcontroller::class, 'Showverify']);
Route::post('login', [Signupcontroller::class, 'userlogin']);
Route::post('verify', [Signupcontroller::class, 'enroll_user']);
Route::get('logout', [Signupcontroller::class, 'logout']);
Route::get('pass_update', [Signupcontroller::class, 'update_pass']);
Route::post('update_pass', [Signupcontroller::class, 'change_pass']);



// Routes for Admin 
Route::get('admin', [Admincontroller::class, 'index']);
Route::post('category', [Admincontroller::class, 'Cat_insert']);
Route::post('product', [Admincontroller::class, 'pro_insert']);





//     $value = compact('field');

//     return  ->with($value);
// });

// Route::get('/product/{name}', 'ProductController@show')->name('product.show');

// Route::get('/demo', function () {
//     $cate = Category::all();
//     echo '<pre>';
//     print_r($cate->toArray());
// });