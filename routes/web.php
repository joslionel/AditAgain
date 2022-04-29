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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', function() {
    return view('test');
});

Route::get('/mines', function(){
    return view('mines');
});
Route::get('/quarries', function() {
    return view('quarries');
});
Route::get('/forum', function() {
    return view('forum');
});

Route::get('/profile', function() {
    return view('profile');
});

// logout route
Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'perform'])->name('logout.perform');
 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
