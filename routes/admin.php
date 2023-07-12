<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Editor;
use App\Http\Middleware\Administrador;


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

/* Grupo de Rotas Autenticadas */

Route::middleware(['auth'])->group(function () {
  /* Manager Dashboard  */
  Route::get('admin/painel', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);

  Route::middleware(['Administrador'])->group(function () {

    /* User */
    Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
    Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(['Administrador']);

    Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(['Administrador']);;
    Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware(['Administrador']);;

    Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
    Route::get('admin/signup/logs', ['as' => 'admin.signup.log', 'uses' => 'Admin\CredencialController@log']);
    /* end user */
  });


  /* lace car */
  Route::get('admin/reda-car/index', ['as' => 'admin.laceCar.index', 'uses' => 'Admin\LaceCarController@index']);
  Route::get('admin/reda-car/show/{id}', ['as' => 'admin.laceCar.show', 'uses' => 'Admin\LaceCarController@show']);
  Route::get('admin/reda-car/create', ['as' => 'admin.laceCar.create', 'uses' => 'Admin\LaceCarController@create']);
  Route::post('admin/reda-car/store', ['as' => 'admin.laceCar.store', 'uses' => 'Admin\LaceCarController@store']);
  Route::get('admin/reda-car/edit/{id}', ['as' => 'admin.laceCar.edit', 'uses' => 'Admin\LaceCarController@edit']);
  Route::put('admin/reda-car/update/{id}', ['as' => 'admin.laceCar.update', 'uses' => 'Admin\LaceCarController@update']);
  Route::get('admin/reda-car/delete/{id}', ['as' => 'admin.laceCar.delete', 'uses' => 'Admin\LaceCarController@destroy']);
  /* end lace car */

  /* HospitalDocuments */
  Route::get('admin/informacoes-reda-car/show', ['as' => 'admin.laceCarDocument.show', 'uses' => 'Admin\LaceCarDocumentController@show']);
  Route::get('admin/informacoes-reda-car/edit/{id}', ['as' => 'admin.laceCarDocument.edit', 'uses' => 'Admin\LaceCarDocumentController@edit']);
  Route::put('admin/informacoes-reda-car/update/{id}', ['as' => 'admin.laceCarDocument.update', 'uses' => 'Admin\LaceCarDocumentController@update']);
  /* end HospitalDocuments */


  
  /* HospitalDocuments */
  Route::get('admin/informacoes-uteis/show', ['as' => 'admin.Usefulinformation.show', 'uses' => 'Admin\UsefulinformationController@show']);
  Route::get('admin/informacoes-uteis/edit/{id}', ['as' => 'admin.Usefulinformation.edit', 'uses' => 'Admin\UsefulinformationController@edit']);
  Route::put('admin/informacoes-uteis/update/{id}', ['as' => 'admin.Usefulinformation.update', 'uses' => 'Admin\UsefulinformationController@update']);
  /* end HospitalDocuments */

  /* signup */

    Route::get('admin/signup/index', ['as' => 'admin.signup.index', 'uses' => 'Admin\SignupController@list']);
    Route::get('admin/signup/show/{id}', ['as' => 'admin.signup.show', 'uses' => 'Admin\SignupController@show']);

    Route::get('admin/signup/edit/{id}', ['as' => 'admin.signup.edit', 'uses' => 'Admin\SignupController@edit']);
    Route::put('admin/signup/update/{id}', ['as' => 'admin.signup.update', 'uses' => 'Admin\SignupController@update']);

    Route::get('admin/credenciamento/verify/{id}', ['as' => 'admin.credencial.verify', 'uses' => 'Admin\CredencialController@verify']);
    Route::get('admin/credenciamento/{id}', ['as' => 'admin.credencial.print', 'uses' => 'Admin\CredencialController@print']);
    Route::get('admin/signup/pdf', ['as' => 'admin.signup.print', 'uses' => 'Admin\SignupController@print']);




    //Jornalistas
    Route::get('admin/jornalistas/index', ['as' => 'admin.press.index', 'uses' => 'Admin\PressController@list']);
    Route::get('admin/jornalistas/show/{id}', ['as' => 'admin.press.show', 'uses' => 'Admin\PressController@show']);
    Route::get('admin/jornalistas/print/{id}', ['as' => 'admin.press.print', 'uses' => 'Admin\PressController@print']);

  /* end signup */


  Route::middleware(['Editor'])->group(function () {
    /* gallery */
    Route::get('admin/gallery/index', ['as' => 'admin.gallery.index', 'uses' => 'Admin\GalleryController@list']);
    Route::get('admin/gallery/show/{id}', ['as' => 'admin.gallery.show', 'uses' => 'Admin\GalleryController@show']);
    Route::get('admin/gallery/create', ['as' => 'admin.gallery.create', 'uses' => 'Admin\GalleryController@create']);
    Route::post('admin/gallery/store', ['as' => 'admin.gallery.store', 'uses' => 'Admin\GalleryController@store']);
    Route::get('admin/gallery/edit/{id}', ['as' => 'admin.gallery.edit', 'uses' => 'Admin\GalleryController@edit']);
    Route::put('admin/gallery/update/{id}', ['as' => 'admin.gallery.update', 'uses' => 'Admin\GalleryController@update']);
    Route::get('admin/gallery/delete/{id}', ['as' => 'admin.gallery.delete', 'uses' => 'Admin\GalleryController@destroy']);
    /* end gallery */

    /* imageGallery */
    Route::get('admin/imageGallery/create/{id}', ['as' => 'admin.imageGallery.create', 'uses' => 'Admin\ImageGalleryController@create']);
    Route::post('admin/imageGallery/store/{id}', ['as' => 'admin.imageGallery.store', 'uses' => 'Admin\ImageGalleryController@store']);
    Route::get('admin/imageGallery/delete/{id}', ['as' => 'admin.imageGallery.delete', 'uses' => 'Admin\ImageGalleryController@destroy']);
    /* End imageGallery */

    /**about */
    Route::get('admin/about/show', ['as' => 'admin.about.show', 'uses' => 'Admin\AboutController@show']);
    Route::get('admin/about/edit/{id}', ['as' => 'admin.about.edit', 'uses' => 'Admin\AboutController@edit']);
    Route::put('admin/about/update/{id}', ['as' => 'admin.about.update', 'uses' => 'Admin\AboutController@update']);

    /**about */
    Route::get('admin/Quem-é-Quem/show', ['as' => 'admin.whoIsWho.show', 'uses' => 'Admin\WhoIsWhoController@show']);
    Route::get('admin/Quem-é-Quem/edit/{id}', ['as' => 'admin.whoIsWho.edit', 'uses' => 'Admin\WhoIsWhoController@edit']);
    Route::put('admin/Quem-é-Quem/update/{id}', ['as' => 'admin.whoIsWho.update', 'uses' => 'Admin\WhoIsWhoController@update']);

    /* slideshow */
    Route::get('admin/slideshow/index', ['as' => 'admin.slideshow.index', 'uses' => 'Admin\SlideShowController@list']);
    Route::get('admin/slideshow/show/{id}', ['as' => 'admin.slideshow.show', 'uses' => 'Admin\SlideShowController@show']);
    Route::get('admin/slideshow/create', ['as' => 'admin.slideshow.create', 'uses' => 'Admin\SlideShowController@create']);
    Route::post('admin/slideshow/store', ['as' => 'admin.slideshow.store', 'uses' => 'Admin\SlideShowController@store']);
    Route::get('admin/slideshow/edit/{id}', ['as' => 'admin.slideshow.edit', 'uses' => 'Admin\SlideShowController@edit']);
    Route::put('admin/slideshow/update/{id}', ['as' => 'admin.slideshow.update', 'uses' => 'Admin\SlideShowController@update']);
    Route::get('admin/slideshow/delete/{id}', ['as' => 'admin.slideshow.delete', 'uses' => 'Admin\SlideShowController@destroy']);
    /* end slideshow */

    /* schedule */
    Route::get('admin/schedule/index', ['as' => 'admin.schedule.index', 'uses' => 'Admin\ScheduleController@list']);
    Route::get('admin/schedule/show/{id}', ['as' => 'admin.schedule.show', 'uses' => 'Admin\ScheduleController@show']);
    Route::get('admin/schedule/create', ['as' => 'admin.schedule.create', 'uses' => 'Admin\ScheduleController@create']);
    Route::post('admin/schedule/store', ['as' => 'admin.schedule.store', 'uses' => 'Admin\ScheduleController@store']);
    Route::get('admin/schedule/edit/{id}', ['as' => 'admin.schedule.edit', 'uses' => 'Admin\ScheduleController@edit']);
    Route::put('admin/schedule/update/{id}', ['as' => 'admin.schedule.update', 'uses' => 'Admin\ScheduleController@update']);
    Route::get('admin/schedule/delete/{id}', ['as' => 'admin.schedule.delete', 'uses' => 'Admin\ScheduleController@destroy']);
    /* end schedule */

        /* schedule */
        Route::get('admin/ScheduleIndustrialization/index', ['as' => 'admin.ScheduleIndustrialization.index', 'uses' => 'Admin\ScheduleIndustrializationController@list']);
        Route::get('admin/ScheduleIndustrialization/show/{id}', ['as' => 'admin.ScheduleIndustrialization.show', 'uses' => 'Admin\ScheduleIndustrializationController@show']);
        Route::get('admin/ScheduleIndustrialization/create', ['as' => 'admin.ScheduleIndustrialization.create', 'uses' => 'Admin\ScheduleIndustrializationController@create']);
        Route::post('admin/ScheduleIndustrialization/store', ['as' => 'admin.ScheduleIndustrialization.store', 'uses' => 'Admin\ScheduleIndustrializationController@store']);
        Route::get('admin/ScheduleIndustrialization/edit/{id}', ['as' => 'admin.ScheduleIndustrialization.edit', 'uses' => 'Admin\ScheduleIndustrializationController@edit']);
        Route::put('admin/ScheduleIndustrialization/update/{id}', ['as' => 'admin.ScheduleIndustrialization.update', 'uses' => 'Admin\ScheduleIndustrializationController@update']);
        Route::get('admin/ScheduleIndustrialization/delete/{id}', ['as' => 'admin.ScheduleIndustrialization.delete', 'uses' => 'Admin\ScheduleIndustrializationController@destroy']);
        /* end schedule */

    /* HospitalDocuments */
    Route::get('admin/informacoes-hospital/show', ['as' => 'admin.hospitalDocuments.show', 'uses' => 'Admin\HospitalDocumentController@show']);
    Route::get('admin/informacoes-hospital/edit/{id}', ['as' => 'admin.hospitalDocuments.edit', 'uses' => 'Admin\HospitalDocumentController@edit']);
    Route::put('admin/informacoes-hospital/update/{id}', ['as' => 'admin.hospitalDocuments.update', 'uses' => 'Admin\HospitalDocumentController@update']);
    /* end HospitalDocuments */

    /* hotelDocuments */
    Route::get('admin/informacoes-hotel/show', ['as' => 'admin.hotelDocuments.show', 'uses' => 'Admin\HotelDocumentController@show']);
    Route::get('admin/informacoes-hotel/edit/{id}', ['as' => 'admin.hotelDocuments.edit', 'uses' => 'Admin\HotelDocumentController@edit']);
    Route::put('admin/informacoes-hotel/update/{id}', ['as' => 'admin.hotelDocuments.update', 'uses' => 'Admin\HotelDocumentController@update']);
    /* end hotelDocuments */

    /* hotelDocuments */
    Route::get('admin/informacoes-restaurante/show', ['as' => 'admin.restaurantDocument.show', 'uses' => 'Admin\RestaurantDocumentController@show']);
    Route::get('admin/informacoes-restaurante/edit/{id}', ['as' => 'admin.restaurantDocument.edit', 'uses' => 'Admin\RestaurantDocumentController@edit']);
    Route::put('admin/informacoes-restaurante/update/{id}', ['as' => 'admin.restaurantDocument.update', 'uses' => 'Admin\RestaurantDocumentController@update']);
    /* end hotelDocuments */

    /* configuration */
    Route::get('admin/configuration/show', ['as' => 'admin.configuration.show', 'uses' => 'Admin\ConfigurationController@show']);

    Route::get('admin/configuration/edit/{id}', ['as' => 'admin.configuration.edit', 'uses' => 'Admin\ConfigurationController@edit']);
    Route::put('admin/configuration/update/{id}', ['as' => 'admin.configuration.update', 'uses' => 'Admin\ConfigurationController@update']);
    /* end configuration */

    /* faq */
    Route::get('admin/faq/index', ['as' => 'admin.faq.index', 'uses' => 'Admin\FaqController@list']);
    Route::get('admin/faq/show/{id}', ['as' => 'admin.faq.show', 'uses' => 'Admin\FaqController@show']);
    Route::get('admin/faq/create', ['as' => 'admin.faq.create', 'uses' => 'Admin\FaqController@create']);
    Route::post('admin/faq/store', ['as' => 'admin.faq.store', 'uses' => 'Admin\FaqController@store']);
    Route::get('admin/faq/edit/{id}', ['as' => 'admin.faq.edit', 'uses' => 'Admin\FaqController@edit']);
    Route::put('admin/faq/update/{id}', ['as' => 'admin.faq.update', 'uses' => 'Admin\FaqController@update']);
    Route::get('admin/faq/delete/{id}', ['as' => 'admin.faq.delete', 'uses' => 'Admin\FaqController@destroy']);
    /* end faq */

    /* doc */
    Route::get('admin/doc/index', ['as' => 'admin.doc.index', 'uses' => 'Admin\DocController@list']);
    Route::get('admin/doc/show/{id}', ['as' => 'admin.doc.show', 'uses' => 'Admin\DocController@show']);
    Route::get('admin/doc/create', ['as' => 'admin.doc.create', 'uses' => 'Admin\DocController@create']);
    Route::post('admin/doc/store', ['as' => 'admin.doc.store', 'uses' => 'Admin\DocController@store']);
    Route::get('admin/doc/edit/{id}', ['as' => 'admin.doc.edit', 'uses' => 'Admin\DocController@edit']);
    Route::put('admin/doc/update/{id}', ['as' => 'admin.doc.update', 'uses' => 'Admin\DocController@update']);
    Route::get('admin/doc/delete/{id}', ['as' => 'admin.doc.delete', 'uses' => 'Admin\DocController@destroy']);
    /* end doc */

    /* hotelList */
    Route::get('admin/Lista-de-hoteis/index', ['as' => 'admin.hotelList.index', 'uses' => 'Admin\HotelListController@index']);
    Route::get('admin/Lista-de-hoteis/show/{id}', ['as' => 'admin.hotelList.show', 'uses' => 'Admin\HotelListController@show']);
    Route::get('admin/Lista-de-hoteis/create', ['as' => 'admin.hotelList.create', 'uses' => 'Admin\HotelListController@create']);
    Route::post('admin/Lista-de-hoteis/store', ['as' => 'admin.hotelList.store', 'uses' => 'Admin\HotelListController@store']);
    Route::get('admin/Lista-de-hoteis/edit/{id}', ['as' => 'admin.hotelList.edit', 'uses' => 'Admin\HotelListController@edit']);
    Route::put('admin/Lista-de-hoteis/update/{id}', ['as' => 'admin.hotelList.update', 'uses' => 'Admin\HotelListController@update']);
    Route::get('admin/Lista-de-hoteis/delete/{id}', ['as' => 'admin.hotelList.delete', 'uses' => 'Admin\HotelListController@destroy']);
    /* end hotelList */

    /* hotelList */
    Route::get('admin/Lista-de-restaurantes/index', ['as' => 'admin.listRestaurants.index', 'uses' => 'Admin\ListRestaurantController@index']);
    Route::get('admin/Lista-de-restaurantes/show/{id}', ['as' => 'admin.listRestaurants.show', 'uses' => 'Admin\ListRestaurantController@show']);
    Route::get('admin/Lista-de-restaurantes/create', ['as' => 'admin.listRestaurants.create', 'uses' => 'Admin\ListRestaurantController@create']);
    Route::post('admin/Lista-de-restaurantes/store', ['as' => 'admin.listRestaurants.store', 'uses' => 'Admin\ListRestaurantController@store']);
    Route::get('admin/Lista-de-restaurantes/edit/{id}', ['as' => 'admin.listRestaurants.edit', 'uses' => 'Admin\ListRestaurantController@edit']);
    Route::put('admin/Lista-de-restaurantes/update/{id}', ['as' => 'admin.listRestaurants.update', 'uses' => 'Admin\ListRestaurantController@update']);
    Route::get('admin/Lista-de-restaurantes/delete/{id}', ['as' => 'admin.listRestaurants.delete', 'uses' => 'Admin\ListRestaurantController@destroy']);
    /* end hotelList */

    /* video */
    Route::get('admin/video/index', ['as' => 'admin.video.index', 'uses' => 'Admin\VideoController@list']);
    Route::get('admin/video/show/{id}', ['as' => 'admin.video.show', 'uses' => 'Admin\VideoController@show']);
    Route::get('admin/video/create', ['as' => 'admin.video.create', 'uses' => 'Admin\VideoController@create']);
    Route::post('admin/video/store', ['as' => 'admin.video.store', 'uses' => 'Admin\VideoController@store']);
    Route::get('admin/video/edit/{id}', ['as' => 'admin.video.edit', 'uses' => 'Admin\VideoController@edit']);
    Route::put('admin/video/update/{id}', ['as' => 'admin.video.update', 'uses' => 'Admin\VideoController@update']);
    Route::get('admin/video/delete/{id}', ['as' => 'admin.video.delete', 'uses' => 'Admin\VideoController@destroy']);
    /* end video */


    /* hospital */
    Route::get('admin/hospital/index', ['as' => 'admin.hospital.index', 'uses' => 'Admin\HospitalController@index']);
    Route::get('admin/hospital/show/{id}', ['as' => 'admin.hospital.show', 'uses' => 'Admin\HospitalController@show']);
    Route::get('admin/hospital/create', ['as' => 'admin.hospital.create', 'uses' => 'Admin\HospitalController@create']);
    Route::post('admin/hospital/store', ['as' => 'admin.hospital.store', 'uses' => 'Admin\HospitalController@store']);
    Route::get('admin/hospital/edit/{id}', ['as' => 'admin.hospital.edit', 'uses' => 'Admin\HospitalController@edit']);
    Route::put('admin/hospital/update/{id}', ['as' => 'admin.hospital.update', 'uses' => 'Admin\HospitalController@update']);
    Route::get('admin/hospital/delete/{id}', ['as' => 'admin.hospital.delete', 'uses' => 'Admin\HospitalController@destroy']);
    /* end hospital */

    /* imagehostelList */
    Route::get('admin/imageGalleryHostital/create/{id}', ['as' => 'admin.imageGalleryHostital.create', 'uses' => 'Admin\ImageHopitalController@create']);
    Route::post('admin/imageGalleryHostital/store/{id}', ['as' => 'admin.imageGalleryHostital.store', 'uses' => 'Admin\ImageHopitalController@store']);

    Route::get('admin/imageGalleryHostital/delete/{id}', ['as' => 'admin.imageGalleryHostital.delete', 'uses' => 'Admin\ImageHopitalController@destroy']);
    /* End imagehostelList */


    /* imagehostelList */
    Route::get('admin/imageGalleryRestaraunt/create/{id}', ['as' => 'admin.imageGalleryRestaraunt.create', 'uses' => 'Admin\ImageRestaurantController@create']);
    Route::post('admin/imageGalleryRestaraunt/store/{id}', ['as' => 'admin.imageGalleryRestaraunt.store', 'uses' => 'Admin\ImageRestaurantController@store']);

    Route::get('admin/imageGalleryRestaraunt/delete/{id}', ['as' => 'admin.imageGalleryRestaraunt.delete', 'uses' => 'Admin\ImageRestaurantController@destroy']);
    /* End imagehostelList */


    /* imagehostelList */
    Route::get('admin/imageGalleryHotel/create/{id}', ['as' => 'admin.imagehostelList.create', 'uses' => 'Admin\ImageHotelController@create']);
    Route::post('admin/imageGalleryHotel/store/{id}', ['as' => 'admin.imagehostelList.store', 'uses' => 'Admin\ImageHotelController@store']);
    Route::get('admin/imageGalleryHotel/delete/{id}', ['as' => 'admin.imagehostelList.delete', 'uses' => 'Admin\ImageHotelController@destroy']);
    /* End imagehostelList */

    /* news */
    Route::get('admin/news/index', ['as' => 'admin.news.index', 'uses' => 'Admin\NewsController@list']);
    Route::get('admin/news/show/{id}', ['as' => 'admin.news.show', 'uses' => 'Admin\NewsController@show']);
    Route::get('admin/news/create', ['as' => 'admin.news.create', 'uses' => 'Admin\NewsController@create']);
    Route::post('admin/news/store', ['as' => 'admin.news.store', 'uses' => 'Admin\NewsController@store']);
    Route::get('admin/news/edit/{id}', ['as' => 'admin.news.edit', 'uses' => 'Admin\NewsController@edit']);
    Route::put('admin/news/update/{id}', ['as' => 'admin.news.update', 'uses' => 'Admin\NewsController@update']);
    Route::get('admin/news/delete/{id}', ['as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@destroy']);
    /* end news */

    /* Accreditation */
    Route::get('admin/acreditação/index', ['as' => 'admin.accreditation.index', 'uses' => 'Admin\AccreditationController@index']);
    Route::get('admin/acreditação/show', ['as' => 'admin.accreditation.show', 'uses' => 'Admin\AccreditationController@show']);
    Route::get('admin/acreditação/edit/{id}', ['as' => 'admin.accreditation.edit', 'uses' => 'Admin\AccreditationController@edit']);
    Route::put('admin/acreditação/update/{id}', ['as' => 'admin.accreditation.update', 'uses' => 'Admin\AccreditationController@update']);
    /* end Accreditation */
  });
});
