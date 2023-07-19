<?php

use Illuminate\Support\Facades\Route;

/* SITE */
route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);

/* ABOUT */
route::get('/sobre-o-infosi', ['as' => 'site.about', 'uses' => 'Site\AboutController@about']);

/* Organization */
route::get('/organograma', ['as' => 'site.organization', 'uses' => 'Site\AboutController@organization']);

/* portfolio */
route::get('/portfolio', ['as' => 'site.portfolio', 'uses' => 'Site\AboutController@portfolio']);

/* CONTACT */
route::get('/Contactos', ['as' => 'site.contact', 'uses' => 'Site\ContactController@index']);

/* FAQ */
route::get('/perguntas-frequentes', ['as' => 'site.faq', 'uses' => 'Site\FAQController@index']);

/* Gallery Image */
route::get('/galeria-de-imagens', ['as' => 'site.image', 'uses' => 'Site\ImageController@index']);
Route::get('/galeria-de-imagens/{name}', ['as' => 'site.image.show', 'uses' => 'Site\ImageController@show']);

/* Gallery Video */
route::get('/galeria-de-videos', ['as' => 'site.video', 'uses' => 'Site\VideoController@index']);
Route::get('/galeria-de-videos/{name}', ['as' => 'site.video.show', 'uses' => 'Site\VideoController@show']);

/* Gallery Audio */
route::get('/galeria-de-audios', ['as' => 'site.audio', 'uses' => 'Site\AudioController@index']);
Route::get('/galeria-de-audios/{name}', ['as' => 'site.audio.show', 'uses' => 'Site\AudioController@show']);


/* Homologation */
route::get('/homologacao', ['as' => 'site.homologation', 'uses' => 'Site\HomologationController@index']);




/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
