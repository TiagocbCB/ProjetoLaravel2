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

    $nome = "Tiago";


    $arr = [1,2,3,4,5];

    return view('welcome',['nome' => $nome, 'arr' => $arr]);
});


Route::get('/teste', function () {
    return view('teste');
});


Route::get('/produtos', function () {

    $busca = request('')

    return view('produtos');
});


Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('produto', ['id' => $id]);
});

/* teste*/
