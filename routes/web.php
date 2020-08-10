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

// Route::get('/', function () {
//     // return view('welcome');
//     return view('index');
// });

Route::get('/', function () {
    // return view('welcome');
    return view('layouts.items.index');
});

Route::get('/data-tables', function () {
    // return view('welcome');
    return view('layouts.items.data-tables');
});

Route::get('/coba/{nama}', function ($nama) {
    $first_name = $nama;
    return $first_name;
});

Route::get('/coba/{nama}/dan/{namaBelakang}', function ($nama, $last_name) {
    $first_name = $nama;
    $nb = $last_name;
    return "$first_name $nb";
});

Route::get('/perkenalan', 'PerkenalanController@halo');

Route::get('/register', 'AuthController@register');

Route::post('/welcome', 'AuthController@welcome');

Route::get('/master', function(){
    return view('layouts.master');
});

Route::get('/items', function(){
    return view('layouts.items.index');
});

Route::get('/items/create', function(){
    return view('layouts.items.create');
});