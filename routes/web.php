<?php

use App\Http\Controllers\Logincontroller;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\Signupcontroller;
use App\Http\Controllers\Admincontroller;
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

Route::get('/', function () {
    return view('index');
});
Route::get('product', function () {
    return view('product');
});
Route::get('service', function () {
    return view('service');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});
Route::get('cart', function () {
    return view('cart');
});
Route::get('profile', function () {
    return view('profile');
});
Route::get('order', function () {
    return view('order');
});
Route::get('address', function () {
    return view('address');
});
Route::get('payment', function () {
    return view('pay');
});

Route::get('register', [Signupcontroller::class, 'Signup']);
Route::post('register', [Signupcontroller::class, 'Create']);
Route::get('login', [Signupcontroller::class, 'Showlogin']);
Route::get('verify', [Signupcontroller::class, 'Showverify']);
Route::post('login', [Signupcontroller::class, 'userlogin']);
Route::post('verify', [Signupcontroller::class, 'enroll_user']);
Route::get('logout', [Signupcontroller::class, 'logout']);
Route::get('admin', [Admincontroller::class, 'index']);




// Route::get('/demo', function () {
//     $cate = Category::all();
//     echo '<pre>';
//     print_r($cate->toArray());
// });