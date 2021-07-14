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

//Client
Route::get('addclient','backend\ClientController@addClient')->name('add.client');
Route::post('saveclient','backend\ClientController@saveClient')->name('save.client');
Route::get('viewclient','backend\ClientController@viewClient')->name('view.client');
Route::get('editclient/{uuid}','backend\ClientController@editClient')->name('edit.client');
Route::post('updateclient/{uuid}','backend\ClientController@updateClient')->name('update.client');
Route::get('deleteclient/{uuid}','backend\ClientController@deleteClient')->name('delete.client');
Route::get('eachclient/{uuid}','backend\ClientController@vieweachClient')->name('vieweach.client');


//Domain
Route::get('adddomain','backend\DomainController@addDomain')->name('add.domain');
Route::post('savedomain','backend\DomainController@saveDomain')->name('save.domain');
Route::get('viewdomain','backend\DomainController@viewDomain')->name('view.domain');
Route::get('editdomain/{uuid}','backend\DomainController@editDomain')->name('edit.domain');
Route::post('updatedomain/{uuid}','backend\DomainController@updateDomain')->name('update.domain');
Route::get('deletedomain/{uuid}','backend\DomainController@deleteDomain')->name('delete.domain');
Route::get('eachdomain/{uuid}','backend\DomainController@vieweachDomain')->name('vieweach.domain');

//Host
Route::get('addhost','backend\HostController@addHost')->name('add.host');
Route::post('savehost','backend\HostController@saveHost')->name('save.host');
Route::get('viewhost','backend\HostController@viewHost')->name('view.host');
Route::get('edithost/{uuid}','backend\HostController@editHost')->name('edit.host');
Route::post('updatehost/{uuid}','backend\HostController@updateHost')->name('update.host');
Route::get('deletehost/{uuid}','backend\HostController@deleteHost')->name('delete.host');






