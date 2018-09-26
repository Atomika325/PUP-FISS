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
    return view('welcome');
});

Route::get('/admin/dashboard', 'PagesController@admindboard');
Route::get('/admin/manager/room', 'PagesController@crudroom');
Route::get('/admin/manager/course', 'PagesController@crudcourse');
Route::get('/admin/manager/subjects', 'PagesController@crudsubject');
Route::get('/admin/manager/professor', 'PagesController@crudprofessor');
Route::get('/admin/manager/curriculum', 'PagesController@crudcurriculum');
Route::get('/admin/scheduling', 'PagesController@scheduling');
Route::get('/admin/scheduling/professor', 'PagesController@pscheduling');
Route::get('/admin/scheduling/class', 'PagesController@sscheduling');
Route::get('/admin/facultylist', 'PagesController@faclist');
Route::get('/professor/dashboard', 'PagesController@profdashboard');
Route::get('/professor/profile', 'PagesController@profprofile');
Route::get('/professor/schedule'. 'PagesController@profschedule');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('room', 'RoomsController');
Route::resource('course', 'CoursesController');
Route::resource('subject', 'SubjectsController');
Route::resource('professor', 'ProfessorsController');

