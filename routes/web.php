<?php

use Illuminate\Support\Facades\Route;

/* SITE */
route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);

/** about */
Route::get('/sobre', ['as' => 'site.about', 'uses' => 'Site\AboutController@index']);

/** health/ */
Route::get('/Saude', ['as' => 'site.health', 'uses' => 'Site\Covid19GuidelineController@index']);
Route::get('/varíola-do-macaco', ['as' => 'site.smallpoxMonkey', 'uses' => 'Site\SmallpoxMonkeyController@index']);



/** visto/ */
Route::get('/visto', ['as' => 'site.visa', 'uses' => 'Site\VisaController@index']);

/** visto/ */
Route::get('/países-membros', ['as' => 'site.memberCountries', 'uses' => 'Site\MemberCountrieController@index']);


/** WhoIsWho/ */
Route::get('/estrutura', ['as' => 'site.structure', 'uses' => 'Site\StructureController@index']);



/** Angola/ */
Route::get('/Angola', ['as' => 'site.angola', 'uses' => 'Site\AngolaController@index']);



/* covid 19 */
Route::get('/Covid-19', ['as' => 'site.covid19Guideline', 'uses' => 'Site\Covid19GuidelineController@index']);


/* agenda */
Route::get('/agenda', ['as' => 'site.schedule', 'uses' => 'Site\ScheduleController@index']);

/**hotelList */
Route::get('/Lista-de-hoteis', ['as' => 'site.hotelList', 'uses' => 'Site\HotelListController@index']);
Route::get('/Lista-de-hoteis/{name}', ['as' => 'site.hotelList.show', 'uses' => 'Site\HotelListController@show']);

/**hospital */
Route::get('/Lista-de-hospitais', ['as' => 'site.hospital', 'uses' => 'Site\HospitalList@index']);
Route::get('/Lista-de-hospitais/{name}', ['as' => 'site.hospital.show', 'uses' => 'Site\HospitalList@show']);


/**listRestaurants */
Route::get('/Lista-de-Restaurantes', ['as' => 'site.listRestaurants', 'uses' => 'Site\ListRestaurantController@index']);
Route::get('/Lista-de-Restaurantes/{name}', ['as' => 'site.listRestaurants.show', 'uses' => 'Site\ListRestaurantController@show']);


/* docs */
Route::get('/documentos', ['as' => 'site.docs', 'uses' => 'Site\DocController@index']);

/* faq */
Route::get('/perguntas-frequentes', ['as' => 'site.faq', 'uses' => 'Site\FaqController@index']);

/* contact */
Route::get('/contactos', ['as' => 'site.contact', 'uses' => 'Site\ContactController@index']);
route::post('site/help/email', ['as' => 'site.help.email', 'uses' => 'Site\Email\HelpController@send']);

/* gallery */
Route::get('/galerias/', ['as' => 'site.gallery', 'uses' => 'Site\GalleryController@index']);
Route::get('/galeria/{name}', ['as' => 'site.gallery.show', 'uses' => 'Site\GalleryController@show']);

/* policyPrivacy */
Route::get('/politicas-de-privacidade', ['as' => 'site.policyPrivacy', 'uses' => 'Site\PolicyPrivacyController@index']);


/* noticias */
Route::get('/noticias', ['as' => 'site.news', 'uses' => 'Site\NewsController@index']);
Route::get('/noticia/{title}', ['as' => 'site.news.show', 'uses' => 'Site\NewsController@show']);


/* signup */
Route::get('/acreditação', ['as' => 'site.accreditation.create', 'uses' => 'Site\AccreditationController@create']);
route::post('/acreditação/store', ['as' => 'site.accreditation.store', 'uses' => 'Site\AccreditationController@store']);


/* signup */
Route::get('/registo', ['as' => 'site.signup.create', 'uses' => 'Site\SignupController@create']);
route::post('/registo/store', ['as' => 'site.signup.store', 'uses' => 'Site\SignupController@store']);
route::get('/registo/comprovativo/show/{id}', ['as' => 'site.signup.show', 'uses' => 'Site\SignupController@show']);
/* END SITE */




/**renda car */
Route::get('/Lista-de-transportes', ['as' => 'site.laceCar', 'uses' => 'Site\LaceCarController@index']);
Route::get('/Lista-de-transportes/{name}', ['as' => 'site.laceCar.show', 'uses' => 'Site\LaceCarController@show']);




/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
