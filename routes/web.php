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

Route::get('/dashboard', function(){
	return view('admin.dashboard');
});

Route::get('/dashboard/all-courses', function(){
	return view('admin.courses.index');
});

Route::get('/dashboard/all-teachers', function(){
	return view('admin.teachers.index');
});

Route::get('/home', 'HomeController@home');

Route::get('/courses', function(){
    echo 'Courses';
});

Route::get('/students', function(){
    echo 'Students';
});
Route::resource('course', 'CourseController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


