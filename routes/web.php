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

// Example
// Route::view('/show', 'posts.show');
// Route::view('form', 'formpelayanan.formkk');

// Public
Route::get('/', 'adminController@index');
Route::get('posts/{post:slug}', 'PostController@show')->name('showpost');

// Error
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

// Admin
Route::middleware('auth')->group(function () {

    // Throw Admin
    Route::get('admin', 'adminController@throwAdmin');
    //post
    Route::get('admin/posts', 'PostController@index')->name('admin.posts');
    Route::get('admin/posts/create', 'PostController@create')->name('create.post');
    Route::post('admin/posts/store', 'PostController@store');
    //update post
    Route::get('admin/posts/{post:slug}/edit', 'PostController@edit')->name('edit.post');
    Route::patch('admin/posts/{post:slug}/edit', 'PostController@update');
    //delete post
    Route::delete('admin/posts/{post:slug}/delete', 'PostController@destroy');

    //slider
    Route::get('admin/sliders', 'sliderController@index');
    Route::get('admin/sliders/create', 'sliderController@create')->name('create.slider');
    Route::post('admin/sliders/store', 'sliderController@store');
    //update slider
    Route::get('admin/sliders/{slider:id}/edit', 'sliderController@edit');
    Route::patch('admin/sliders/{slider:id}/update', 'sliderController@update');
    //delete post
    Route::delete('admin/sliders/{slider:id}/delete', 'sliderController@destroy');

    // statistic
    Route::get('admin/statistics', 'statisticController@index');
    // Edit Statistic
    Route::get('admin/statistics/{statistic:id}/edit', 'statisticController@edit')->name('edit.statistic');
    Route::patch('admin/statistics/{statistic:id}/update', 'statisticController@update');
});


// Disable Register
Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
