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
    return view('home');
});

Auth::routes();

use App\Http\Controllers\StaticPageController;

Route::get('/{page}', StaticPageController::class)
    ->name('page')
    ->where('page', 'about|terms|contact');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);