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
        'message' => 'WELCOME LARAVEL!!',

        'menus' =>[
         'HOME' => '/', 
         'ABOUT'=> '/chi-siamo',
         'WHERE'=> '/dove',
         'CONTACTS'=> 'contattaci',
         'WELCOME BLADE' => 'use-blade',
        ],
    ];

    return view('home' , $datalink);
});

Route::get('/contattaci', function () {
    $datalink = [
        'menus' =>[
         'HOME' => '/', 
         'ABOUT'=> '/chi-siamo',
         'WHERE'=> '/dove',
         'CONTACTS'=> 'contattaci',
         'WELCOME BLADE' => 'use-blade',
        ],
    ];
    return view('contacts', $datalink );
});
Route::get('/chi-siamo', function () {
    $datalink = [
        'menus' =>[
         'HOME' => '/', 
         'ABOUT'=> '/chi-siamo',
         'WHERE'=> '/dove',
         'CONTACTS'=> 'contattaci',
         'WELCOME BLADE' => 'use-blade',
        ],
    ];
    return view('bio', $datalink);
});
Route::get('/use-blade', function () {
    $datalink = [
        'menus' =>[
         'HOME' => '/', 
         'ABOUT'=> '/chi-siamo',
         'WHERE'=> '/dove',
         'CONTACTS'=> 'contattaci',
         'WELCOME BLADE' => 'use-blade',
        ],
    ];
    return view('welcome', $datalink);
});
Route::get('/dove', function () {
    $datalink = [
        'menus' =>[
         'HOME' => '/', 
         'ABOUT'=> '/chi-siamo',
         'WHERE'=> '/dove',
         'CONTACTS'=> 'contattaci',
         'WELCOME BLADE' => 'use-blade',
        ],
    ];
    return view('where',$datalink );
});

?>