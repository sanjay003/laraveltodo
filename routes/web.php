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
/* I am going to create route with controller*/
Route::get('/student/list','Student@index');
Route::get('/student/create','Student@create');
Route::get('/student/student','Student@add');
Route::get('/student',['as'=>'student.list','uses'=>'Student@index']);
Route::get('/student/edit/{id}', ['as' => 'student.edit', 'uses' => 'Student@edit']);
Route::patch('/student/update/{id}', ['as' => 'student.update', 'uses' => 'Student@update']); 
Route::delete('/student/delete/{id}',['as'=>'student.delete','uses'=>'Student@delete']);




