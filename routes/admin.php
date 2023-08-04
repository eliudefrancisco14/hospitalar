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
    Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/create', ['as' => 'admin.user.create', 'uses' => 'Admin\UserController@create'])->withoutMiddleware(['Administrador']);
    Route::post('admin/user/store', ['as' => 'admin.user.store', 'uses' => 'Admin\UserController@store'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(['Administrador']);
    Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/edits/{id}', ['as' => 'admin.user.edits', 'uses' => 'Admin\UserController@edits'])->withoutMiddleware(['Administrador']);
    Route::put('admin/user/updates/{id}', ['as' => 'admin.user.updates', 'uses' => 'Admin\UserController@updates'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/userSearch', ['as' => 'admin.user.userSearch', 'uses' => 'Admin\UserController@search']);
    Route::get('admin/signup/logs', ['as' => 'admin.signup.log', 'uses' => 'Admin\CredencialController@log']);
    /* end */

    /* Gallery Page */
    Route::get('admin/gallery/index', ['as' => 'admin.gallery.index', 'uses' => 'Admin\GalleryController@index']);
    Route::get('admin/gallery/create', ['as' => 'admin.gallery.create', 'uses' => 'Admin\GalleryController@create']);
    Route::post('admin/gallery/store', ['as' => 'admin.gallery.store', 'uses' => 'Admin\GalleryController@store']);
    Route::get('admin/gallery/show/{id}', ['as' => 'admin.gallery.show', 'uses' => 'Admin\GalleryController@show']);
    Route::get('admin/gallery/edit/{id}', ['as' => 'admin.gallery.edit', 'uses' => 'Admin\GalleryController@edit']);
    Route::put('admin/gallery/updates/{id}', ['as' => 'admin.gallery.update', 'uses' => 'Admin\GalleryController@update']);
    Route::get('admin/gallery/delete/{id}', ['as' => 'admin.gallery.delete', 'uses' => 'Admin\GalleryController@destroy']);
    Route::get('admin/gallery/gallerySearch', ['as' => 'admin.gallery.gallerySearch', 'uses' => 'Admin\GalleryController@search']);
    /* end */

    /* Image Gallery */
    Route::get('admin/imageGallery/create/{id}', ['as' => 'admin.imageGallery.create', 'uses' => 'Admin\ImageGalleryController@create']);
    Route::post('admin/imageGallery/store/{id}', ['as' => 'admin.imageGallery.store', 'uses' => 'Admin\ImageGalleryController@store']);
    Route::get('admin/imageGallery/delete/{id}', ['as' => 'admin.imageGallery.delete', 'uses' => 'Admin\ImageGalleryController@destroy']);
    /* End */

    /* video */
    Route::get('admin/video/index', ['as' => 'admin.video.index', 'uses' => 'Admin\VideoController@index']);
    Route::get('admin/video/show/{id}', ['as' => 'admin.video.show', 'uses' => 'Admin\VideoController@show']);
    Route::get('admin/video/create', ['as' => 'admin.video.create', 'uses' => 'Admin\VideoController@create']);
    Route::post('admin/video/store', ['as' => 'admin.video.store', 'uses' => 'Admin\VideoController@store']);
    Route::get('admin/video/edit/{id}', ['as' => 'admin.video.edit', 'uses' => 'Admin\VideoController@edit']);
    Route::put('admin/video/update/{id}', ['as' => 'admin.video.update', 'uses' => 'Admin\VideoController@update']);
    Route::get('admin/video/delete/{id}', ['as' => 'admin.video.delete', 'uses' => 'Admin\VideoController@destroy']);
    Route::get('admin/video/videoSearch', ['as' => 'admin.video.videoSearch', 'uses' => 'Admin\VideoController@search']);
    /* end */

    /* Contact */
    Route::get('admin/contact/show/', ['as' => 'admin.contact.show', 'uses' => 'Admin\ContactsController@show']);
    Route::get('admin/contact/edit/{id}', ['as' => 'admin.contact.edit', 'uses' => 'Admin\ContactsController@edit']);
    Route::put('admin/contact/update/{id}', ['as' => 'admin.contact.update', 'uses' => 'Admin\ContactsController@update']);
    /* end */

    /* Partner */
    Route::get('admin/partner/index', ['as' => 'admin.partner.index', 'uses' => 'Admin\PartnerController@index']);
    Route::get('admin/partner/show/{id}', ['as' => 'admin.partner.show', 'uses' => 'Admin\PartnerController@show']);
    Route::get('admin/partner/create', ['as' => 'admin.partner.create', 'uses' => 'Admin\PartnerController@create']);
    Route::post('admin/partner/store', ['as' => 'admin.partner.store', 'uses' => 'Admin\PartnerController@store']);
    Route::get('admin/partner/edit/{id}', ['as' => 'admin.partner.edit', 'uses' => 'Admin\PartnerController@edit']);
    Route::put('admin/partner/update/{id}', ['as' => 'admin.partner.update', 'uses' => 'Admin\PartnerController@update']);
    Route::get('admin/partner/delete/{id}', ['as' => 'admin.partner.delete', 'uses' => 'Admin\PartnerController@destroy']);
    Route::get('admin/partner/partnerSearch', ['as' => 'admin.partner.partnerSearch', 'uses' => 'Admin\PartnerController@search']);
    /* end */

    /* Frequently Asked Question */
    Route::get('admin/faq/index', ['as' => 'admin.faq.index', 'uses' => 'Admin\FAQController@index']);
    Route::get('admin/faq/show/{id}', ['as' => 'admin.faq.show', 'uses' => 'Admin\FAQController@show']);
    Route::get('admin/faq/create', ['as' => 'admin.faq.create', 'uses' => 'Admin\FAQController@create']);
    Route::post('admin/faq/store', ['as' => 'admin.faq.store', 'uses' => 'Admin\FAQController@store']);
    Route::get('admin/faq/edit/{id}', ['as' => 'admin.faq.edit', 'uses' => 'Admin\FAQController@edit']);
    Route::put('admin/faq/update/{id}', ['as' => 'admin.faq.update', 'uses' => 'Admin\FAQController@update']);
    Route::get('admin/faq/delete/{id}', ['as' => 'admin.faq.delete', 'uses' => 'Admin\FAQController@destroy']);
    /* end */

    /* Service */
    Route::get('admin/service/index', ['as' => 'admin.service.index', 'uses' => 'Admin\ServiceController@index']);
    Route::get('admin/service/show/{id}', ['as' => 'admin.service.show', 'uses' => 'Admin\ServiceController@show']);
    Route::get('admin/service/create', ['as' => 'admin.service.create', 'uses' => 'Admin\ServiceController@create']);
    Route::post('admin/service/store', ['as' => 'admin.service.store', 'uses' => 'Admin\ServiceController@store']);
    Route::get('admin/service/edit/{id}', ['as' => 'admin.service.edit', 'uses' => 'Admin\ServiceController@edit']);
    Route::put('admin/service/update/{id}', ['as' => 'admin.service.update', 'uses' => 'Admin\ServiceController@update']);
    Route::get('admin/service/delete/{id}', ['as' => 'admin.service.delete', 'uses' => 'Admin\ServiceController@destroy']);
    /* end */

    /* Slide Show */
    Route::get('admin/slide/index', ['as' => 'admin.slide.index', 'uses' => 'Admin\SlideController@index']);
    Route::get('admin/slide/show/{id}', ['as' => 'admin.slide.show', 'uses' => 'Admin\SlideController@show']);
    Route::get('admin/slide/create', ['as' => 'admin.slide.create', 'uses' => 'Admin\SlideController@create']);
    Route::post('admin/slide/store', ['as' => 'admin.slide.store', 'uses' => 'Admin\SlideController@store']);
    Route::get('admin/slide/edit/{id}', ['as' => 'admin.slide.edit', 'uses' => 'Admin\SlideController@edit']);
    Route::put('admin/slide/update/{id}', ['as' => 'admin.slide.update', 'uses' => 'Admin\SlideController@update']);
    Route::get('admin/slide/delete/{id}', ['as' => 'admin.slide.delete', 'uses' => 'Admin\SlideController@destroy']);
    /* end */

    /* Definition Show */
    Route::get('admin/definition/index', ['as' => 'admin.definition.index', 'uses' => 'Admin\DefinitionController@index']);
    Route::get('admin/definition/show/{id}', ['as' => 'admin.definition.show', 'uses' => 'Admin\DefinitionController@show']);
    Route::get('admin/definition/create', ['as' => 'admin.definition.create', 'uses' => 'Admin\DefinitionController@create']);
    Route::post('admin/definition/store', ['as' => 'admin.definition.store', 'uses' => 'Admin\DefinitionController@store']);
    Route::get('admin/definition/edit/{id}', ['as' => 'admin.definition.edit', 'uses' => 'Admin\DefinitionController@edit']);
    Route::put('admin/definition/update/{id}', ['as' => 'admin.definition.update', 'uses' => 'Admin\DefinitionController@update']);
    Route::get('admin/definition/delete/{id}', ['as' => 'admin.definition.delete', 'uses' => 'Admin\DefinitionController@destroy']);
    /* end */

    /* Direction Show */
    Route::get('admin/direction/index', ['as' => 'admin.direction.index', 'uses' => 'Admin\DirectionController@index']);
    Route::get('admin/direction/show/{id}', ['as' => 'admin.direction.show', 'uses' => 'Admin\DirectionController@show']);
    Route::get('admin/direction/create', ['as' => 'admin.direction.create', 'uses' => 'Admin\DirectionController@create']);
    Route::post('admin/direction/store', ['as' => 'admin.direction.store', 'uses' => 'Admin\DirectionController@store']);
    Route::get('admin/direction/edit/{id}', ['as' => 'admin.direction.edit', 'uses' => 'Admin\DirectionController@edit']);
    Route::put('admin/direction/update/{id}', ['as' => 'admin.direction.update', 'uses' => 'Admin\DirectionController@update']);
    Route::get('admin/direction/delete/{id}', ['as' => 'admin.direction.delete', 'uses' => 'Admin\DirectionController@destroy']);
    /* end */

    /* Department */
    Route::get('admin/department/index', ['as' => 'admin.department.index', 'uses' => 'Admin\DepartmentController@index']);
    Route::get('admin/department/show/{id}', ['as' => 'admin.department.show', 'uses' => 'Admin\DepartmentController@show']);
    Route::get('admin/department/create', ['as' => 'admin.department.create', 'uses' => 'Admin\DepartmentController@create']);
    Route::post('admin/department/store', ['as' => 'admin.department.store', 'uses' => 'Admin\DepartmentController@store']);
    Route::get('admin/department/edit/{id}', ['as' => 'admin.department.edit', 'uses' => 'Admin\DepartmentController@edit']);
    Route::put('admin/department/update/{id}', ['as' => 'admin.department.update', 'uses' => 'Admin\DepartmentController@update']);
    Route::get('admin/department/delete/{id}', ['as' => 'admin.department.delete', 'uses' => 'Admin\DepartmentController@destroy']);
    /* end */

    /* Direction Regulation */
    Route::get('admin/regulation/index', ['as' => 'admin.regulation.index', 'uses' => 'Admin\RegulationController@index']);
    Route::get('admin/regulation/show/{id}', ['as' => 'admin.regulation.show', 'uses' => 'Admin\RegulationController@show']);
    Route::get('admin/regulation/create', ['as' => 'admin.regulation.create', 'uses' => 'Admin\RegulationController@create']);
    Route::post('admin/regulation/store', ['as' => 'admin.regulation.store', 'uses' => 'Admin\RegulationController@store']);
    Route::get('admin/regulation/edit/{id}', ['as' => 'admin.regulation.edit', 'uses' => 'Admin\RegulationController@edit']);
    Route::put('admin/regulation/update/{id}', ['as' => 'admin.regulation.update', 'uses' => 'Admin\RegulationController@update']);
    Route::get('admin/regulation/delete/{id}', ['as' => 'admin.regulation.delete', 'uses' => 'Admin\RegulationController@destroy']);
    /* end */

    /* Direction Digital Inclusion */
    Route::get('admin/digitalInclusion/index', ['as' => 'admin.digitalInclusion.index', 'uses' => 'Admin\DigitalInclusionController@index']);
    Route::get('admin/digitalInclusion/show/{id}', ['as' => 'admin.digitalInclusion.show', 'uses' => 'Admin\DigitalInclusionController@show']);
    Route::get('admin/digitalInclusion/create', ['as' => 'admin.digitalInclusion.create', 'uses' => 'Admin\DigitalInclusionController@create']);
    Route::post('admin/digitalInclusion/store', ['as' => 'admin.digitalInclusion.store', 'uses' => 'Admin\DigitalInclusionController@store']);
    Route::get('admin/digitalInclusion/edit/{id}', ['as' => 'admin.digitalInclusion.edit', 'uses' => 'Admin\DigitalInclusionController@edit']);
    Route::put('admin/digitalInclusion/update/{id}', ['as' => 'admin.digitalInclusion.update', 'uses' => 'Admin\DigitalInclusionController@update']);
    Route::get('admin/digitalInclusion/delete/{id}', ['as' => 'admin.digitalInclusion.delete', 'uses' => 'Admin\DigitalInclusionController@destroy']);
    /* end */

    /* Main Image Gallery */
    Route::get('admin/imagedigitalInclusion/create/{id}', ['as' => 'admin.imagedigitalInclusion.create', 'uses' => 'Admin\ImageDigitalInclusionController@create']);
    Route::post('admin/imagedigitalInclusion/store/{id}', ['as' => 'admin.imagedigitalInclusion.store', 'uses' => 'Admin\ImageDigitalInclusionController@store']);
    Route::get('admin/imagedigitalInclusion/delete/{id}', ['as' => 'admin.imagedigitalInclusion.delete', 'uses' => 'Admin\ImageDigitalInclusionController@destroy']);
    /* end */

    /* Direction News */
    Route::get('admin/news/index', ['as' => 'admin.news.index', 'uses' => 'Admin\NewsController@index']);
    Route::get('admin/news/show/{id}', ['as' => 'admin.news.show', 'uses' => 'Admin\NewsController@show']);
    Route::get('admin/news/create', ['as' => 'admin.news.create', 'uses' => 'Admin\NewsController@create']);
    Route::post('admin/news/store', ['as' => 'admin.news.store', 'uses' => 'Admin\NewsController@store']);
    Route::get('admin/news/edit/{id}', ['as' => 'admin.news.edit', 'uses' => 'Admin\NewsController@edit']);
    Route::put('admin/news/update/{id}', ['as' => 'admin.news.update', 'uses' => 'Admin\NewsController@update']);
    Route::get('admin/news/delete/{id}', ['as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@destroy']);
    /* end */

    /* Province */
    Route::get('admin/province/index', ['as' => 'admin.province.index', 'uses' => 'Admin\ProvinceController@index']);
    Route::get('admin/province/show/{id}', ['as' => 'admin.province.show', 'uses' => 'Admin\ProvinceController@show']);
    Route::get('admin/province/create', ['as' => 'admin.province.create', 'uses' => 'Admin\ProvinceController@create']);
    Route::post('admin/province/store', ['as' => 'admin.province.store', 'uses' => 'Admin\ProvinceController@store']);
    Route::get('admin/province/edit/{id}', ['as' => 'admin.province.edit', 'uses' => 'Admin\ProvinceController@edit']);
    Route::put('admin/province/update/{id}', ['as' => 'admin.province.update', 'uses' => 'Admin\ProvinceController@update']);
    Route::get('admin/province/delete/{id}', ['as' => 'admin.province.delete', 'uses' => 'Admin\ProvinceController@destroy']);
    /* end */

    /* ProvinceDocuments */
    Route::get('admin/informacoes-province/show', ['as' => 'admin.provinceDocument.show', 'uses' => 'Admin\ProvinceDocumentController@show']);
    Route::get('admin/informacoes-province/edit/{id}', ['as' => 'admin.provinceDocument.edit', 'uses' => 'Admin\ProvinceDocumentController@edit']);
    Route::put('admin/informacoes-province/update/{id}', ['as' => 'admin.provinceDocument.update', 'uses' => 'Admin\ProvinceDocumentController@update']);
    /* end */

    /* Angola Online Point */
    Route::get('admin/point/create/{id}', ['as' => 'admin.point.create', 'uses' => 'Admin\AngolaOnlineController@create']);
    Route::post('admin/point/store/{id}', ['as' => 'admin.point.store', 'uses' => 'Admin\AngolaOnlineController@store']);
    Route::get('admin/point/edit/{id_}/{id}', ['as' => 'admin.point.edit', 'uses' => 'Admin\AngolaOnlineController@edit']);
    Route::get('admin/point/delete/{id}', ['as' => 'admin.point.delete', 'uses' => 'Admin\AngolaOnlineController@destroy']);
    Route::put('admin/point/update/{id}', ['as' => 'admin.point.update', 'uses' => 'Admin\AngolaOnlineController@update']);
    /* end  */

        /* Angola InternShip Point */
        Route::get('admin/internship/index', ['as' => 'admin.internship.create', 'uses' => 'Admin\InternshipController@index']);
        Route::get('admin/internship/show/{id}', ['as' => 'admin.internship.show', 'uses' => 'Admin\InternshipController@show']);
        Route::get('admin/internship/delete/{id}', ['as' => 'admin.internship.delete', 'uses' => 'Admin\InternshipController@destroy']);
        /* end  */

    /* homologation */
    Route::get('admin/homologation/index', ['as' => 'admin.homologation.index', 'uses' => 'Admin\HomologationController@index']);
    Route::get('admin/homologation/show/{id}', ['as' => 'admin.homologation.show', 'uses' => 'Admin\HomologationController@show']);
    Route::get('admin/homologation/create', ['as' => 'admin.homologation.create', 'uses' => 'Admin\HomologationController@create']);
    Route::post('admin/homologation/store', ['as' => 'admin.homologation.store', 'uses' => 'Admin\HomologationController@store']);
    Route::get('admin/homologation/edit/{id}', ['as' => 'admin.homologation.edit', 'uses' => 'Admin\HomologationController@edit']);
    Route::put('admin/homologation/update/{id}', ['as' => 'admin.homologation.update', 'uses' => 'Admin\HomologationController@update']);
    Route::get('admin/homologation/delete/{id}', ['as' => 'admin.homologation.delete', 'uses' => 'Admin\HomologationController@destroy']);
    /* end */
  });
});
