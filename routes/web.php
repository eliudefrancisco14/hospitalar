<?php

use Illuminate\Support\Facades\Route;

/* SITE */
route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);


/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
