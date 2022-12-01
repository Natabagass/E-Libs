<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Request\UpdateProfileRequest;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PostController;


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
    return view('pages.loginPage');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/post', function () {
    return view('post.view');
});

Route::get('/post', [PostController::class, 'index'])->middleware('auth');;

Route::get('/genre', [GenreController::class, 'index'])->middleware('auth');
Route::get('/genre/{id}', [GenreController::class, 'show'])->middleware('auth');
Route::get('/book/{id}', [BookController::class, 'read'])->middleware('auth');



Route::group(['middleware' => 'auth'], function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('pages.profile');
    
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('pages.profile.update');
});

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);