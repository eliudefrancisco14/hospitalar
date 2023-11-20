<?php

use Illuminate\Support\Facades\Route;

/* SITE */
route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);

/* PACIENTE */

route::get('/paciente', ['as' => 'site.pacient', 'uses' => 'Site\PacientController@index']);
Route::post('/pacient/store', ['as' => 'site.pacient.store', 'uses' => 'Site\PacientController@store']);


Route::get('pdf/consult/{nBI}', ['as' => 'pdf.consult.index', 'uses' => 'Site\PacientController@pdf']);


/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
