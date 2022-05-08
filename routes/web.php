<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Mine;
use App\Http\Controllers;
use App\Http\Controllers\MineController as MineController;
use App\Http\Controllers\ProfileController;

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

// get the homepage

Route::get('/', function () {
    return view('welcome');
});

// adds login modal functionality

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

// show an individual profile

Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');

// show own profile for editing

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');

// update/store profile image
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('profile.store');

// edit profile info
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

//get the mines index page
Route::get('/mines', [App\Http\Controllers\MineController::class, 'index'])->name('mine.index');

//get an individual mine based on id
Route::get('mines/{mine}', [App\Http\Controllers\MineController::class, 'show'])->name('mine.show');

// get the quarries index page
Route::get('/quarries', function() {
    return view('quarries.quarries');
});
Route::get('/forum', function() {
    return view('forum.forum');
});

// logout route

Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'perform'])->name('logout.perform');
 });



// raw db queries///./

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


/*
Eloquent - object relational model
*/

// Route::get('/find', function() {

//     $mines = Mine::all();

//     foreach ($mines as $mine) {
//         echo $mine->mineName;
//     };

// });

// this find function doesn't work
// Route::get('/find/{id}', function() {
//     $mine = Mine::find($id);
//     return $mine;
// });

// Route::get('/findwhere', function(){
//     $mines = Mine::where('id', 2)->orderBy('id', 'desc')->take(1)->get();

//     return $mines;
// });

// Route::get('/findmore', function(){
//     $mines = Mine::findorfail(1);
//     return $mines;
// });

// basic insert

// Route::get('/basicinsert', function() {
//     $mine = new Mine;

//     $mine->mineName = 'Generic Mine';
//     $mine->backgroundInfo = 'Info about the mine';

//     $mine->save();
// });

// basic update

// Route::get('/update', function() {
//     $mine = Mine::find(2);

//     $mine->mineName = 'New Mine';
//     $mine->backgroundInfo = 'New info';

//     $mine->save();
// });

// create data (update model to reflect fillable values)
// Route::get('/create', function(){
//     Mine::create(['mineName'=>'Cwmystwyth','backgroundInfo'=>'Info about Cwmy']);
// });

// proper update

// Route::get('/update', function() {
//     Mine::where('id', 2)->update(['mineName'=>'New Mine Name', 'backgroundInfo'=>'New history of mine']);
// });

// delete

// Route::get('/delete', function(){
//     $mine = Mine::find(2);

//     $mine->delete();
// });

// delete2

//Route::get('delete2', function() {
    //Post::destroy(3); // if you know the key already
    //Post::destroy([4,5]);
    //Post::where('mineName'=>'Cwmystwyth')->delete(); // to delete by using a query

//});

//soft delete (updated imports at top of Mine model to import soft deletes)
// Route::get('softdelete', function() {
//     Mine::find(2)->delete();
// });