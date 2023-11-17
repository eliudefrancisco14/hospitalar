<?php

use Illuminate\Support\Facades\Route;

/* SITE */
route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);

/* PACIENTE */

route::get('/paciente', ['as' => 'site.pacient', 'uses' => 'Site\PacientController@index']);
Route::post('/pacient/store', ['as' => 'site.pacient.store', 'uses' => 'Site\PacientController@store']);


/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
