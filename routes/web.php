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
        'phrase_1' => 'Finalmente Laravel!',
        'phrase_2' => 'Non so se essere emozionato, avere paura o entrambi',
    ];

    return view('home', $data);
});
