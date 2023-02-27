<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\NewsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index']);

// route prefix to ProductsController
Route::prefix('/product')->group(function(){
    Route::get('/games', [ProductsController::class, 'games']);
    Route::get('/kids', [ProductsController::class, 'kids']);
    Route::get('/story-books', [ProductsController::class, 'storyBooks']);
    Route::get('/songs', [ProductsController::class, 'songs']);
});

// route parameter to NewsController
Route::get('/news/{id}', [NewsController::class, 'news']);

// route prefix to ProgramsController
Route::prefix('/program')->group(function(){
    Route::get('/karir', [ProgramsController::class, 'karir']);
    Route::get('/magang', [ProgramsController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramsController::class, 'kunjungan_industri']);
});

// route to about-us
Route::get('/about-us', function(){
    return redirect("https://www.educastudio.com/about-us");
});

// route resource to ContactUsController
Route::resource('/contact-us', ContactUsController::class);