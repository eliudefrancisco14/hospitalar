<?php

use Illuminate\Support\Facades\Route;

/* SITE */
route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);

/* ABOUT */
route::get('/sobre-o-infosi', ['as' => 'site.about', 'uses' => 'Site\AboutController@index']);

/* Organization */
route::get('/estrutura-organica', ['as' => 'site.organization', 'uses' => 'Site\DirectionController@index']);
route::get('/estrutura-organica/{name}', ['as' => 'site.organization.show', 'uses' => 'Site\DirectionController@show']);

/* regulation */
route::get('/regulation', ['as' => 'site.regulation', 'uses' => 'Site\RegulationController@index']);

/* CONTACT */
route::get('/Contactos', ['as' => 'site.contact', 'uses' => 'Site\ContactController@index']);
route::post('site/help/email', ['as' => 'site.help.email', 'uses' => 'Site\Email\HelpController@send']);

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

/* Service Image */
route::get('/servicos', ['as' => 'site.services', 'uses' => 'Site\ServiceController@index']);
Route::get('/servicos/{name}', ['as' => 'site.services.show', 'uses' => 'Site\ServiceController@show']);

/* Homologation */
route::get('/homologacao', ['as' => 'site.homologation', 'uses' => 'Site\HomologationController@index']);

/* Digital Inclusion */
route::get('/inclusao-digital', ['as' => 'site.digitalInclusion', 'uses' => 'Site\DigitalInclusionController@index']);
Route::get('/inclusao-digital/{name}', ['as' => 'site.digitalInclusion.show', 'uses' => 'Site\DigitalInclusionController@show']);

/* News */
route::get('/noticias', ['as' => 'site.news', 'uses' => 'Site\NewsController@index']);
Route::get('/noticia/{title}', ['as' => 'site.news.show', 'uses' => 'Site\NewsController@show']);

/* Terms */
route::get('/termos', ['as' => 'site.terms', 'uses' => 'Site\TermsController@index']);

/* internship */
route::get('/programa-de-estagio', ['as' => 'site.internship', 'uses' => 'Site\InternshipController@index']);
route::post('/inscricao', ['as' => 'site.internship.store', 'uses' => 'Site\InternshipController@store']);

/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
