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
	//==================== KHO HÀNG ==========================
			//-- TẠO FX -- TẦNG BÁN HÀNG, NHÓM BÁN HÀNG 
			Route::group(['prefix'=>'fx'], function(){
				Route::get('', 'FxCtrl@index')->name('admin.fx');
				Route::get('create', 'FxCtrl@create');
				Route::post('store', 'FxCtrl@store');
				Route::get('edit/{id}', 'FxCtrl@edit');
				Route::post('update', 'FxCtrl@update');
				Route::get('destroy/{id}', 'FxCtrl@destroy');
			});
			//-- Tạo Catalog
			Route::group(['prefix'=>'catalog'], function(){
				Route::get('', 'CatalogCtrl@index')->name('admin.catalog');
			    Route::get('create', 'CatalogCtrl@create');
			    Route::post('store', 'CatalogCtrl@store');
			    Route::get('edit', 'CatalogCtrl@edit');
			    Route::post('update', 'CatalogCtrl@update');
			    Route::get('destroy/{id}', 'CatalogCtrl@destroy');
			});
			//--- NHÀ SẢN XUẤT PRODUCER
			Route::group(['prefix'=>'producer'], function(){
				Route::get('', 'ProducerCtrl@index');
				Route::get('create', 'ProducerCtrl@create');
				Route::post('store', 'ProducerCtrl@store');
				Route::get('edit', 'ProducerCtrl@edit');
				Route::post('update', 'ProducerCtrl@update');
				Route::get('destroy', 'ProducerCtrl@destroy');
			});
			//-- SẢN  PHẨM PRODUCT
			Route::group(['prefix'=>'product'], function(){
				Route::get('', 'ProductCtrl@index');
				Route::get('create', 'ProductCtrl@create');
				Route::post('store', 'ProductCtrl@store');
				Route::get('edit', 'ProductCtrl@edit');
				Route::post('update', 'ProductCtrl@update');
				Route::get('destroy', 'ProductCtrl@destroy');
				Route::get('sale', 'ProductCtrl@sale'); // sản phẩm khuyến mãi 
			});
	//==================== HẾT CODE KHO HÀNG ==========================

	});
Auth::routes();

Route::get('/home', 'HomeController@index');
