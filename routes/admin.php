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
    /* end user */

    /* Main Gallery */
    Route::get('admin/gallery/index', ['as' => 'admin.gallery.index', 'uses' => 'Admin\GalleryController@index']);
    Route::get('admin/gallery/create', ['as' => 'admin.gallery.create', 'uses' => 'Admin\GalleryController@create']);
    Route::post('admin/gallery/store', ['as' => 'admin.gallery.store', 'uses' => 'Admin\GalleryController@store']);
    Route::get('admin/gallery/show/{id}', ['as' => 'admin.gallery.show', 'uses' => 'Admin\GalleryController@show']);
    Route::get('admin/gallery/edit/{id}', ['as' => 'admin.gallery.edit', 'uses' => 'Admin\GalleryController@edit']);
    Route::put('admin/gallery/updates/{id}', ['as' => 'admin.gallery.update', 'uses' => 'Admin\GalleryController@update']);
    Route::get('admin/gallery/delete/{id}', ['as' => 'admin.gallery.delete', 'uses' => 'Admin\GalleryController@destroy']);
    Route::get('admin/gallery/gallerySearch', ['as' => 'admin.gallery.gallerySearch', 'uses' => 'Admin\GalleryController@search']);
    /* end Gallery */

    /* Main Image Gallery */
    Route::get('admin/imageGallery/index', ['as' => 'admin.imageGallery.index', 'uses' => 'Admin\ImageGalleryController@index']);
    Route::get('admin/imageGallery/create', ['as' => 'admin.imageGallery.create', 'uses' => 'Admin\ImageGalleryController@create']);
    Route::post('admin/imageGallery/store', ['as' => 'admin.imageGallery.store', 'uses' => 'Admin\ImageGalleryController@store']);
    Route::get('admin/imageGallery/show/{id}', ['as' => 'admin.imageGallery.show', 'uses' => 'Admin\ImageGalleryController@show']);
    Route::get('admin/imageGallery/edit/{id}', ['as' => 'admin.imageGallery.edit', 'uses' => 'Admin\ImageGalleryController@edit']);
    Route::put('admin/imageGallery/updates/{id}', ['as' => 'admin.imageGallery.update', 'uses' => 'Admin\ImageGalleryController@update']);
    Route::get('admin/imageGallery/editImage/{id}', ['as' => 'admin.imageGallery.editImage.index', 'uses' => 'Admin\ImageGalleryController@editImage']);
    Route::post('admin/imageGallery/updateImage/{id}', ['as' => 'admin.imageGallery.updateImage', 'uses' => 'Admin\ImageGalleryController@updateImage']);
    Route::get('admin/imageGallery/delete/{id}', ['as' => 'admin.imageGallery.delete', 'uses' => 'Admin\ImageGalleryController@destroy']);
    /* end Gallery */

    /* video */
    Route::get('admin/video/index', ['as' => 'admin.video.index', 'uses' => 'Admin\VideoController@index']);
    Route::get('admin/video/show/{id}', ['as' => 'admin.video.show', 'uses' => 'Admin\VideoController@show']);
    Route::get('admin/video/create', ['as' => 'admin.video.create', 'uses' => 'Admin\VideoController@create']);
    Route::post('admin/video/store', ['as' => 'admin.video.store', 'uses' => 'Admin\VideoController@store']);
    Route::get('admin/video/edit/{id}', ['as' => 'admin.video.edit', 'uses' => 'Admin\VideoController@edit']);
    Route::put('admin/video/update/{id}', ['as' => 'admin.video.update', 'uses' => 'Admin\VideoController@update']);
    Route::get('admin/video/delete/{id}', ['as' => 'admin.video.delete', 'uses' => 'Admin\VideoController@destroy']);
    Route::get('admin/video/videoSearch', ['as' => 'admin.video.videoSearch', 'uses' => 'Admin\VideoController@search']);
    /* end video */

    /* Contact */
    Route::get('admin/contact/index', ['as' => 'admin.contact.index', 'uses' => 'Admin\ContactsController@index']);
    Route::get('admin/contact/show/{id}', ['as' => 'admin.contact.show', 'uses' => 'Admin\ContactsController@show']);
    Route::get('admin/contact/create', ['as' => 'admin.contact.create', 'uses' => 'Admin\ContactsController@create']);
    Route::post('admin/contact/store', ['as' => 'admin.contact.store', 'uses' => 'Admin\ContactsController@store']);
    Route::get('admin/contact/edit/{id}', ['as' => 'admin.contact.edit', 'uses' => 'Admin\ContactsController@edit']);
    Route::put('admin/contact/update/{id}', ['as' => 'admin.contact.update', 'uses' => 'Admin\ContactsController@update']);
    Route::get('admin/contact/delete/{id}', ['as' => 'admin.contact.delete', 'uses' => 'Admin\ContactsController@destroy']);
    Route::get('admin/contact/contactsSearch', ['as' => 'admin.contact.contactsSearch', 'uses' => 'Admin\ContactsController@search']);
    /* end Contact */

    /* Partner */
    Route::get('admin/partner/index', ['as' => 'admin.partner.index', 'uses' => 'Admin\PartnerController@index']);
    Route::get('admin/partner/show/{id}', ['as' => 'admin.partner.show', 'uses' => 'Admin\PartnerController@show']);
    Route::get('admin/partner/create', ['as' => 'admin.partner.create', 'uses' => 'Admin\PartnerController@create']);
    Route::post('admin/partner/store', ['as' => 'admin.partner.store', 'uses' => 'Admin\PartnerController@store']);
    Route::get('admin/partner/edit/{id}', ['as' => 'admin.partner.edit', 'uses' => 'Admin\PartnerController@edit']);
    Route::put('admin/partner/update/{id}', ['as' => 'admin.partner.update', 'uses' => 'Admin\PartnerController@update']);
    Route::get('admin/partner/delete/{id}', ['as' => 'admin.partner.delete', 'uses' => 'Admin\PartnerController@destroy']);
    Route::get('admin/partner/partnerSearch', ['as' => 'admin.partner.partnerSearch', 'uses' => 'Admin\PartnerController@search']);
    /* end Partner */

    /* Frequently Asked Question */
    Route::get('admin/faq/index', ['as' => 'admin.faq.index', 'uses' => 'Admin\FAQController@index']);
    Route::get('admin/faq/show/{id}', ['as' => 'admin.faq.show', 'uses' => 'Admin\FAQController@show']);
    Route::get('admin/faq/create', ['as' => 'admin.faq.create', 'uses' => 'Admin\FAQController@create']);
    Route::post('admin/faq/store', ['as' => 'admin.faq.store', 'uses' => 'Admin\FAQController@store']);
    Route::get('admin/faq/edit/{id}', ['as' => 'admin.faq.edit', 'uses' => 'Admin\FAQController@edit']);
    Route::put('admin/faq/update/{id}', ['as' => 'admin.faq.update', 'uses' => 'Admin\FAQController@update']);
    Route::get('admin/faq/delete/{id}', ['as' => 'admin.faq.delete', 'uses' => 'Admin\FAQController@destroy']);
    Route::get('admin/faq/faqSearch', ['as' => 'admin.faq.faqSearch', 'uses' => 'Admin\FAQController@search']);
    /* end Frequently Asked Question */

    /* Service */
    Route::get('admin/service/index', ['as' => 'admin.service.index', 'uses' => 'Admin\ServiceController@index']);
    Route::get('admin/service/show/{id}', ['as' => 'admin.service.show', 'uses' => 'Admin\ServiceController@show']);
    Route::get('admin/service/create', ['as' => 'admin.service.create', 'uses' => 'Admin\ServiceController@create']);
    Route::post('admin/service/store', ['as' => 'admin.service.store', 'uses' => 'Admin\ServiceController@store']);
    Route::get('admin/service/edit/{id}', ['as' => 'admin.service.edit', 'uses' => 'Admin\ServiceController@edit']);
    Route::put('admin/service/update/{id}', ['as' => 'admin.service.update', 'uses' => 'Admin\ServiceController@update']);
    Route::get('admin/service/delete/{id}', ['as' => 'admin.service.delete', 'uses' => 'Admin\ServiceController@destroy']);
    Route::get('admin/service/serviceSearch', ['as' => 'admin.service.serviceSearch', 'uses' => 'Admin\ServiceController@search']);
    /* end Service */

     /* Slide Show */
     Route::get('admin/slide/index', ['as' => 'admin.slide.index', 'uses' => 'Admin\SlideController@index']);
     Route::get('admin/slide/show/{id}', ['as' => 'admin.slide.show', 'uses' => 'Admin\SlideController@show']);
     Route::get('admin/slide/create', ['as' => 'admin.slide.create', 'uses' => 'Admin\SlideController@create']);
     Route::post('admin/slide/store', ['as' => 'admin.slide.store', 'uses' => 'Admin\SlideController@store']);
     Route::get('admin/slide/edit/{id}', ['as' => 'admin.slide.edit', 'uses' => 'Admin\SlideController@edit']);
     Route::put('admin/slide/update/{id}', ['as' => 'admin.slide.update', 'uses' => 'Admin\SlideController@update']);
     Route::get('admin/slide/delete/{id}', ['as' => 'admin.slide.delete', 'uses' => 'Admin\SlideController@destroy']);
     Route::get('admin/slide/slideSearch', ['as' => 'admin.slide.slideSearch', 'uses' => 'Admin\SlideController@search']);
     /* end Service */
  });
});
