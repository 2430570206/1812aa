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



//Route::any('prize/add','Prize\PrizeController@add');

Route::get('/prize','Prize\PrizeController@index');       //抽奖
Route::post('/prize','Prize\PrizeController@prizeDo');       //抽奖