<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('data_perusahaan')->group(function(){
    Route::get('indexjabatan','JabatanController@index');
    Route::post('inputjabatan','JabatanController@create');
    Route::put('editjabatan/{id}','JabatanController@update');
    Route::delete('deletejabatan/{id}','JabatanController@delete');

    Route::get('divisi','DivisiController@index');
    Route::post('divisi','DivisiController@create');
    Route::put('divisi/{id}','DivisiController@update');
    Route::delete('divisi/{id}','DivisiController@delete');

    Route::get('indexstatus','StatusController@index');
    Route::post('inputstatus','StatusController@create');
    Route::put('editstatus/{id}','StatusController@update');
    Route::delete('deletestatus/{id}','StatusController@delete');

    Route::get('indexkaryawan','KaryawanController@index');
    Route::post('inputkaryawan','KaryawanController@create');
    Route::put('editkaryawan/{id}','KaryawanController@update');
    Route::delete('deletekaryawan/{id}','KaryawanController@delete');

});

// Route::prefix('DataData')->group(function(){
//     Route::get('IndexDivisi', 'DivisiController@index');
//     Route::post('CreateDivisi', 'DivisiController@create');
//     Route::put('UpdateDivisi/{id}', 'DivisiController@update');
//     Route::delete('DeleteDivisi/{id}', 'DivisiController@delete');

//     Route::get('IndexJabatan', 'JabatanController@index');
//     Route::post('CreateJabatan', 'JabatanController@create');
//     Route::put('UpdateJabatan/{id}', 'JabatanController@update');
//     Route::delete('DeleteJabatan/{id}', 'JabatanController@delete');

//     Route::get('IndexStatus', 'StatusController@index');
//     Route::post('CreateStatus', 'StatusController@create');
//     Route::put('UpdateStatus/{id}', 'StatusController@update');
//     Route::delete('DeleteStatus/{id}', 'StatusController@delete');

    
//     Route::get('IndexKaryawan', 'KaryawanController@index');
//     Route::post('CreateKaryawan', 'KaryawanController@create');
//     Route::put('UpdateKaryawan/{id}', 'KaryawanController@update');
//     Route::delete('DeleteKaryawan/{id}', 'KaryawanController@delete');
// });