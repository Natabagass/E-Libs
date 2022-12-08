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
// Menambahkan route home
Route::get('/home', function () {
    return view('pages.home');
});
// Menambahkan route post
Route::get('/post', function () {
    return view('post.view');
});

// Route::get('/create', function () {
//     return view('post.create');
// });

Route::get('/create', [PostController::class, 'create'])->middleware('auth');
Route::post('/create', [PostController::class, 'store'])->middleware('auth');


Route::get('/edit', [PostController::class, 'edit'])->middleware('auth');
Route::post('/edit', [PostController::class, 'update'])->middleware('auth');


Route::get('/genre', [GenreController::class, 'index'])->middleware('auth');
Route::get('/genre/{id}', [GenreController::class, 'show'])->middleware('auth');
Route::get('/book/{id}', [BookController::class, 'read'])->middleware('auth');

Route::get('/post', [PostController::class, 'index'])->middleware('auth')->name('post');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->middleware('auth');
Route::put('/post/update', [PostController::class, 'update'])->middleware('auth');
// Route::get('/post/{id}', [PostController::class, 'destroy'])->middleware('auth')->name('destroy');
Route::delete('/post/delete/{id}', [PostController::class, 'destroy']); // delete kategori




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