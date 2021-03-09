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

Route::get('/homepage', function () {
  $data = [
    'nome' => 'Pippo',
    'cognome' => 'Rossi'
  ];
    return view('home', $data);
});

Route::get('/contact', function () {
  $data = [
    'lista_contatti'=> [
      'segreteria',
      'centralino',
      'prenotazioni',
      'richiesta documenti'
    ]
  ];
    return view('contatti', $data);
});

Route::get('/prova', function () {
  $data = [
    'cose' =>[
      'pallone',
      'racchetta',
      'bottiglia'
    ],
    'animali'=>[]
  ];
    return view('prova', $data);
});
