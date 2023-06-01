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

    $name = 'pinco';

    return view('home', compact('name'));
}) -> name('home');


Route::get('/about', function () {

    $data = [
        'data1' => 'dataX',
        'data2' => 'dataY',
        'data3' => 'dataZ'
    ];

    return view('about', $data);
}) -> name('about');

Route::get('/contacts', function () {
    return view('contacts');
}) -> name('contacts');
