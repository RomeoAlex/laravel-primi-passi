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
    $datalink = [
        'menus' =>[
         'HOME',  
         'ABOUT',
         'WHERE',
         'CONTACTS',
         'WELCOME BLADE',
        ],
    ];

    return view('home' , $datalink);
});

Route::get('/contattaci', function () {
    return view('contacts');
});
Route::get('/chi-siamo', function () {
    return view('bio');
});
Route::get('/use-blade', function () {
    return view('welcome');
});
Route::get('/dove', function () {
    return view('where' );
});