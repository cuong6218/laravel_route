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

Route::prefix('customer')->group(function (){
    Route::get('index', function (){
        echo 'Show list customer';
        return view('index');
    });
    Route::get('create', function (){
        //Display form add customer
    });
    Route::post('store', function (){
        //Save data customer
    });
    Route::get('{id}/show', function (){
        //Display customer detail
    });
    Route::get('{id}/edit', function (){
        //Display form edit customer
    });
    Route::patch('{id}/update', function (){
        //Update customer info
    });
    Route::delete('{id}', function (){
        //Delete customer info
    });
});