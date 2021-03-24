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
Route::get('posts/{post:slug}', 'PostController@show')->name('showpost');

Route::view('layanan', 'layanan');
Route::view('tentangkami', 'tentangkami');
Route::view('try', 'try');

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

    Route::get('admin', 'adminController@pengalihanAdmin');
    //post
    Route::get('admin/posts', 'adminController@index')->name('admin.posts');
    Route::get('admin/posts/create', 'adminController@create')->name('create');
    Route::post('admin/posts/store', 'adminController@store');
    //update post
    Route::get('admin/posts/{post:slug}/edit', 'adminController@edit');
    Route::patch('admin/posts/{post:slug}/edit', 'adminController@update');
    //delete post
    Route::delete('admin/posts/{post:slug}/delete', 'adminController@destroy');

    //slider
    Route::get('admin/sliders', 'sliderController@index');
    Route::get('admin/sliders/create', 'sliderController@create');
    Route::post('admin/sliders/store', 'sliderController@store');
    //update slider
    Route::get('admin/sliders/{slider:id}/edit', 'sliderController@edit');
    Route::patch('admin/sliders/{slider:id}/update', 'sliderController@update');
    //delete post
    Route::delete('admin/sliders/{slider:id}/delete', 'sliderController@destroy');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
