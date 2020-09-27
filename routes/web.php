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

// Login & Register
Route::get('admin/dashboard', 'AdminController@index');
Route::get('admin/login', 'AdminController@login');
Route::post('admin/loginPost', 'AdminController@loginPost');
Route::get('admin/register', 'AdminController@register');
Route::post('admin/registerPost', 'AdminController@registerPost');
Route::get('admin/logout', 'AdminController@logout');


// Wisata
Route::get('admin/wisata/bali', 'ArticleController@indexBali');
Route::get('admin/wisata/banyuwangi', 'ArticleController@indexBanyuwangi');
Route::get('admin/wisata/bromo', 'ArticleController@indexBromo');

Route::get('admin/wisata/all', 'ArticleController@index');
Route::get('admin/wisata/add', 'ArticleController@create');
Route::post('admin/wisata/all', 'ArticleController@store');
Route::get('admin/wisata/{article}', 'ArticleController@show');
Route::get('admin/wisata/{article}/edit', 'ArticleController@edit');
Route::put('admin/wisata/{article}', 'ArticleController@update');
Route::delete('admin/wisata/{article}', 'ArticleController@destroy');

// Cars, Gallery, Testimonials
Route::resource('admin/cars', 'CarController');
Route::resource('admin/gallery', 'GalleryController');
Route::resource('admin/testimonials', 'TestimonialController');


// FrontEnd
Route::get('cars/bali', 'UserController@carsBali');
Route::get('cars/banyuwangi', 'UserController@carsBanyuwangi');
Route::get('cars/bromo', 'UserController@carsBromo');

Route::get('testimonials', 'UserController@testimonials');
Route::get('gallery', 'UserController@gallery');

Route::get('wisata/bali', 'UserController@wisataBali');
Route::get('wisata/banyuwangi', 'UserController@wisataBanyuwangi');
Route::get('wisata/bromo', 'UserController@wisataBromo');

Route::get('wisata/bali/{article}', 'UserController@show');
Route::get('wisata/banyuwangi/{article}', 'UserController@show');
Route::get('wisata/bromo/{article}', 'UserController@show');

Route::get('about', 'UserController@about');