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
// *********** MAIN **************
Route::get('/', function () {
    return view('users.users');
});
Auth::routes();
Route::get('/home', 'HomeController@index');

// *********** USERS **************




// *********** ADMIN **************

Route::group(['prefix'=>'admin'], function(){
	Route::get('/', function(){
		return view('admin.admin');
	});
	//-- Tạo Catalog
	Route::group(['prefix'=>'catalog'], function(){
		Route::get('', 'CatalogCtrl@index')->name('admin.catalog');
	    Route::get('create', 'CatalogCtrl@create');
	    Route::post('store', 'CatalogCtrl@store');
	});
	//-- Tao Producer 


	//-- Tao Product

	});