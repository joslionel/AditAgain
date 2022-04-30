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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// raw db queries

//insert info into database
// Route::get('/insert', function() {

//     DB::insert('insert into mines(mineName, backgroundInfo) values(?, ?)', ['Cwmystwyth', 'Cwmystwyth Info']);
// });

// read db
// Route::get('/getmine', function() {
//     $results = DB::select('select * from mines where id = ?', [1]);
//     foreach ($results as $result) {
//         return $result->mineName . " " . $result->backgroundInfo;
//     }
//     //return view('mine', $results);
// });

// delete
// Route::get('delmine', function(){
//     DB::delete('delete from mines where id = ?', [1]);
// });


