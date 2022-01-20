<?php

use App\Http\Controllers\BuildingController;
use App\Models\Post;
use App\Models\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('home', [
//         "title" => "Home",
//         "image" => "vu-anh-TiVPTYCG_3E-unsplash.jpg"
//     ]);
// });
Route::get('/', [BuildingController::class, 'index']);

Route::get('/contact', function () {
    return view('contact', [
        "name" => "M Raza A N",
        "email"=> "muhammad.nugraha017@binus.ac.id",
        "phone" => "(+62) 87784701257",
        "title" => "Contact"
    ]);
});
// Route::get('/cart', function () {
//     return view('cart', [
//         "name" => "M Raza A N",
//         "email"=> "muhammad.nugraha017@binus.ac.id",
//         "phone" => "(+62) 87784701257",
//         "title" => "Cart"
//     ]);
// });


Route::get('/cart', [UserController::class, 'getCart']);
Route::get('/listing', [PropertyController::class, 'index']);

//halaman single post
Route::get('/property/{slug}', [PropertyController::class, 'show']);

Route::get('/logout', function(){
    Session::flush();
    Session::forget('user');
    Auth::logout();
    return redirect('login');

});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/building/{id}', [BuildingController::class, 'getDetail']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register-user', [UserController::class, 'register']);
Route::post('/login-user', [UserController::class, 'login']);
Route::post('/addToListing', [UserController::class, 'addToListing']);
Route::get('/deleteItem/{id}', [UserController::class, 'deleteItemCart']);
