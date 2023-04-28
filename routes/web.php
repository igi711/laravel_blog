<?php

use Illuminate\Support\Facades\Route;
use App\Models\BlogPost;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

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

//Route::get('/', function () {
 //   return view('welcome');
//});

//Route::get('/', function() {
//    return view('index');
//});


Route::get('/index', function() {
    return view('index');
});

Route::get('/', function () {

    $blog_posts = BlogPost::all();
    //$blog_posts = DB::table('blog_posts')->get();

    return view('index', ['blog_posts' => $blog_posts]);
});

Route::get('/register', [HomeController::class, 'register'])->name('register');

Route::get("/controller", [BlogController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'home'])->name('home');


