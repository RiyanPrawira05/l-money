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

Route::get('/', function(){
	return view('laraMoney.home');
})->name('home');

Route::resource('Lara-Money', 'MoneyController', [
	'names' => [
				'index' => 'home.finance',
				'create' => 'create.finance',
				'store' => 'added.finance',
				'edit' => 'edit.finance',
				'update' => 'update.finance',
				] 
			]);

Route::post('/Delete', 'MoneyController@delete')->name('delete.finance');

Route::get('/Chart', 'MoneyController@chart')->name('chart.finance');
