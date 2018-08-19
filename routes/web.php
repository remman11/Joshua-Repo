<?php

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

/* Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','WebPagesController@aboutView');
Route::get('/home', 'WebPagesController@indexView');
Route::get('/login','WebPagesController@loginView');
Route::resource('berth', 'BerthController');
/*
Much more cleaner than using slashes

Route::get('/home', function () {
    return view('webpages.home');
});
/

/*
dynamic routing sample for Editing / Deleting   

Route::get('/tugboat/{country}/{id}', function ($country, $id) {
    return $country.' '.$id;
});

*/
