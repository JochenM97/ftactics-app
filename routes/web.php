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

use App\CustomTactic;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/make-tactic', 'HomeController@makeTactic')->name('makeTactic');

Route::get('/profile', 'HomeController@profile')->name('profile');

Route::post('/save-profile/{id}', 'HomeController@saveProfile')->name('save-profile');

Route::post('/save-tactic', 'HomeController@saveTactic')->name('save-tactic');

Route::get('/saved-tactics', 'HomeController@showSavedTactics')->name('saved-tactics');

Route::get('/saved-tactics/{id}', 'HomeController@showCustomTactic');//->middleware('can:view,App\CustomTactic');

Route::get('/delete-tactic/{id}', 'HomeController@deleteCustomTactic');

Route::get('/find-tactics', 'HomeController@showFindTactics')->name('find-tactics');

Route::get('/find-tactics/{id}', 'HomeController@showStandardTactic');

Route::get('/shared-tactics/{id}', 'PublicController@showSharedTactic');