<?php


use Illuminate\Support\Facades\Auth;
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

Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('auth');

//Route::get('/post', 'PostController@index')->name('post.index')->middleware('auth');

Route::resource('post', 'PostController');

Route::group(['prefix' => 'projects', 'as' => 'projects.'], function () {
    Route::get('create', 'ProjectsController@create')->name('create');
    Route::post('create', 'ProjectsController@store')->name('store');
});

Route::group(['prefix' => 'shop', 'as' => 'shop.'], function () {
    Route::get('coupon', 'CouponController@index')->name('coupon');
});


Route::get('skills', function() {
    return [
        'laravel',
        'Vue',
        'PHP',
        'JavaScript',
        'Tooling'
    ];
});
