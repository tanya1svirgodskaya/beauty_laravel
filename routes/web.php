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

Route::get('/', 'App\Http\Controllers\RecordsController@recordsfortoday') -> name ('home');
Route::get('/records/new/', 'App\Http\Controllers\RecordsController@newrecord') -> name ('newrecord');
Route::post('/records/new/create', 'App\Http\Controllers\RecordsController@createrecords') -> name ('createrecord');
Route::get('/records', function () {
    return view('records') ;
});
