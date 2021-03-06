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
    return view('opleidingen');
});

Route::get('/adminpanel', 'AdminPanelController@index');
Route::get('/sdg', 'SdgController@index');
Route::get('/sdgoverview/{num}', 'SdgController@sdgOverview');
Route::post('/opleiding_edit', 'AdminPanelController@editOpleidingIndex')->name("opleiding_edit");
Route::post('/project_add', 'AdminPanelController@addProjectIndex')->name("project_add");
Route::post('/project_create', 'AdminPanelController@createProject')->name("project_create");
Route::post('/opleiding_update', 'AdminPanelController@updateOpleiding')->name("opleiding_update");

Route::get('/view', 'GraphController@index');
Route::get('/graph/{id}' , 'GraphController@graph');
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');


