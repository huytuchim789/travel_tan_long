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

// User part
Route::group(['namespace' => 'User'], function() {
	Route::get('/', 'HomeController@index')->name('home');
	Route::get('/tours', 'HomeController@allTour')->name('home.tours');
	Route::get('/tours-special', 'HomeController@specialTours')->name('home.tours.special');
	Route::get('/tours/{tours?}', 'HomeController@singleTours')->name('home.single.tours');
	Route::get('/tour/{tour?}', 'HomeController@singleTour')->name('single.tour');
	Route::get('/tour-special/{specialtour?}', 'HomeController@singleSpecialTour')->name('singleSpecial.tour');
	Route::get('blog', 'BlogController@index')->name('blog');
	Route::get('blog/{blog?}', 'BlogController@singleBlog')->name('blog.single');
	Route::get('/contact/{tour_id}', 'HomeController@contact_page')->name('contact.home')->middleware('auth');
	Route::post('/contact/store', 'HomeController@store_contact')->name('contact.store')->middleware('auth');
	Route::get('/privacy', 'HomeController@privacy')->name('privacy');
	Route::get('/about', 'HomeController@about')->name('about');
	Route::get('/guide/{id}', 'HomeController@guide')->name('show.guide');
});

// Admin part
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
	Route::get('home', 'HomeController@index')->name('admin.home');
	// Tour route
	Route::resource('tour', 'TourController');
	// Special route
	Route::resource('tour-special', 'TourSpecialController');
	// Tour guide
	Route::resource('tour-guide', 'TourGuideController');
	// Category route
	Route::resource('category', 'CategoryController');
	// Blog route
	Route::resource('blog', 'BlogController');
	// Tag route
	Route::resource('tag', 'TagController');
	// Contact route
	Route::resource('message', 'ContactControler');
	// User route
	Route::resource('user', 'UserController');
	// Roles rotue
	Route::resource('role', 'RoleController');
	// Permissions rotue
	Route::resource('permission', 'PermissionController');
	// Admin auth routes
	Route::get('admin-login/', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login/', 'Auth\LoginController@login')->name('admin.login');
});



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');