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
    $data = [
        'stringhe' =>[
        'ciao',
        'sono',
        'un',
        'array',
        'di',
        'stringhe',
        'stampato',
        'con',
        'un',
        'foreach',
        ]
    ];
    return view('home', $data);
});
