<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Client\Request;

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


// Route::view('/', 'welcome');

Route::get('/', 'PostController@index');
Route::get('posts/{post:slug}', 'PostController@show');

Route::view('layanan', 'layanan');
Route::view('tentangkami', 'tentangkami');

Route::get(
    '/logout',
    function () {
        return abort(404);
    }
);
Route::get(
    '/store',
    function () {
        return abort(404);
    }
);

Route::middleware('auth')->group(function () {

    Route::get('admin', 'adminController@index')->name('admin');
    Route::get('create', 'adminController@create')->name('create');
    Route::post('store', 'adminController@store');

    //update
    Route::get('posts/{post:slug}/edit', 'adminController@edit');
    Route::patch('posts/{post:slug}/edit', 'adminController@update');

    //delete
    Route::delete('posts/{post:slug}/delete', 'adminController@destroy');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
