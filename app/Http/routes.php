<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['namespace'=>'url'], function () {

Route::get('/',[
    'as'=>'main',
    'uses'=>'URLController@index'
]);

Route::get('about',[
    'as'=>'about',
    'uses'=>'URLController@about'
]);

Route::post('/',[
     'as'=>'store',
     'uses'=>'URLController@store'
    ]);

Route::get('/{hash_url}',[
    'as'=>'RedirectAway',
    'uses'=>'URLController@RedirectAway'
]);

});
