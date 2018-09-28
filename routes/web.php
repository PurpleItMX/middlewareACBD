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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/client', 'ClientController@index')->name('index');
Route::get('/client/new', 'ClientController@new')->name('new');
Route::get('/client/edit/{id}',array('as' => 'id', 'uses' => 'ClientController@edit'));
Route::get('/client/save/{id}',array('as' => 'id', 'uses' => 'ClientController@save'));


//webService libre de routingAuth
Route::get('/webservice/clients', 'WebServiceController@getClients')->name('clients');
