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

Route::get('/', function () {
    return view('disciplines.about');
});

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function() {
  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users', 'UserController');
  Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
  Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
  Route::resource('/posts', 'PostController');
  Route::resource('/institutes', 'InstituteController');
  Route::resource('/courses', 'CourseController');
  Route::get('/courses/create/{institute_id}', 'CourseController@create')->name('courses.create');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', function () {
    return view('disciplines.about');
});
Route::get('/search', function () {
    return view('disciplines.search');
});
Route::get('/detail', function () {
    return view('disciplines.detail');
});
Route::get('/major', function () {
    return view('disciplines.major');
});
