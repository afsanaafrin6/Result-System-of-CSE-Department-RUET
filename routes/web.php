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
Route::get('/prac', function () {
    return view('users.prac');
});
Auth::routes();

Route::get('/homee', 'HomeController@index')->name('home');

Route::group(['middleware'=>['web']],function(){
	Route::get('/login',['as'=>'login','uses'=>'AuthController@login']);

	 Route::post('/handlelogin',['as'=>'handlelogin','uses'=>'AuthController@handlelogin']);
    Route::get('/home',['middleware'=>'auth','as'=>'home','uses'=>'UsersController@home']); 
     Route::get('/shome',['middleware'=>'auth','as'=>'shome','uses'=>'UsersController@shome']); 
    Route::get('/logout',['as'=>'logout','uses'=>'AuthController@logout']);
    
    Route::resource('users','UsersController',['only'=>['create','store','update']]);
    Route::get('/edit/{id}',['as'=>'edit','uses'=>'UsersController@edit']);
     Route::post('/update/{id}',['as'=>'update','uses'=>'UsersController@update']);

    Route::get('/courseedit/{code}',['as'=>'courseedit','uses'=>'CoursesController@edit']);
    Route::get('/course',['as'=>'course','uses'=>'CoursesController@course']);
      Route::post('/courseupdate/{id}',['as'=>'courseupdate','uses'=>'CoursesController@update']);

       Route::resource('teachercourses','teachercoursesController',['only'=>['create','store','update','index']]);
       Route::get('/teachercourseedit/{id}',['as'=>'teachercourseedit','uses'=>'teachercoursesController@edit']);
         Route::get('/teachercourseshow/{code}',['as'=>'teachercourseshow','uses'=>'teachercoursesController@show']);
    Route::get('/teachercourse',['as'=>'teachercourse','uses'=>'teachercoursesController@teachercourse']);
      Route::post('/teachercourseupdate/{id}',['as'=>'teachercourseupdate','uses'=>'teachercoursesController@update']); 
      Route::get('/teachercoursed/{id}',['as'=>'teachercoursed','uses'=>'teachercoursesController@destroy']); 

      Route::get('/teachercourseshoww/{code}',['as'=>'teachercoursectshow','uses'=>'teachercoursesController@ctshow']);
      Route::get('/teachercoursesct/{id}',['as'=>'teachercoursect','uses'=>'teachercoursesController@ct']);
      Route::get('/teachercourseattendanceshow/{code}',['as'=>'teachercourseattendanceshow','uses'=>'teachercoursesController@attendance']);
      
      Route::get('/studentcgpashow/{code}',['as'=>'studentcgpashow','uses'=>'CtmarksController@studentcgpa']); 

      Route::get('/teacherattendanceshow/{code}',['as'=>'teacherattendanceshow','uses'=>'teachercoursesController@teacherattendanceshow']);

      Route::resource('ct','CtmarksController',['only'=>['create','store','update']]);
       Route::get('/ctdit/{id}',['as'=>'ctedit','uses'=>'CtmarksController@edit']);
         Route::get('/ctshow/{code}',['as'=>'ctshow','uses'=>'CtmarksController@show']);
    Route::get('/cts',['as'=>'cts','uses'=>'CtmarksController@ct']);
      Route::post('/ctupdate',['as'=>'ctupdate','uses'=>'CtmarksController@update']); 
     Route::get('/ctmarks/{course1}/{section}/{id}',['as'=>'ctmarks','uses'=>'CtmarksController@ctmarks']);
     Route::get('/studentctmarks/{course1}/{code}',['as'=>'studentctmarks','uses'=>'CtmarksController@studentctmarks']);

      Route::get('/marks/{course1}/{section}/{id}',['as'=>'marks','uses'=>'CtmarksController@marks']);
      Route::get('/teachercoursesmark/{id}',['as'=>'markstore','uses'=>'teachercoursesController@mark']);
      Route::post('/markupdate',['as'=>'markupdate','uses'=>'CtmarksController@markupdate']);
      Route::post('/markcreate',['as'=>'markcreate','uses'=>'CtmarksController@markcreate']); 

     Route::get('/attendances/{course1}/{section}/{id}',['as'=>'attendances','uses'=>'AttendsController@attendances']);
     Route::get('/courseattends/{course1}/{code}/{id}',['as'=>'courseattends','uses'=>'AttendsController@courseattends']);
     Route::get('/attend/{course1}/{section}/{id}',['as'=>'attend','uses'=>'AttendsController@attend']);
     
     Route::get('/showcode/{course1}',['as'=>'showcode','uses'=>'AttendsController@showcode']);
     Route::get('/showdate/{course1}',['as'=>'showdate','uses'=>'AttendsController@showdate']);

    Route::get('/teachercourseattendance/{id}',['as'=>'teachercourseattendance','uses'=>'teachercoursesController@attend']);
   
   Route::resource('studentattend','AttendsController',['only'=>['create','store','update']]);
   Route::get('/studentattendance/{code}',['as'=>'studentattendance','uses'=>'teachercoursesController@studentattendance']);



      

});