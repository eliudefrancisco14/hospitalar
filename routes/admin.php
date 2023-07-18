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
    Route::get('admin/user/create', ['as' => 'admin.user.create', 'uses' => 'Admin\UserController@create'])->withoutMiddleware(['Administrador']);
    Route::post('admin/user/store', ['as' => 'admin.user.store', 'uses' => 'Admin\UserController@store'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(['Administrador']);
    Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/edits/{id}', ['as' => 'admin.user.edits', 'uses' => 'Admin\UserController@edits'])->withoutMiddleware(['Administrador']);
    Route::put('admin/user/updates/{id}', ['as' => 'admin.user.updates', 'uses' => 'Admin\UserController@updates'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
    Route::get('admin/signup/logs', ['as' => 'admin.signup.log', 'uses' => 'Admin\CredencialController@log']);
    /* end user */

    /* Main Gallery */
    Route::get('admin/gallery/index', ['as' => 'admin.gallery.index', 'uses' => 'Admin\GalleryController@index']);
    Route::get('admin/gallery/create', ['as' => 'admin.gallery.create', 'uses' => 'Admin\GalleryController@create']);
    Route::post('admin/gallery/store', ['as' => 'admin.gallery.store', 'uses' => 'Admin\GalleryController@store']);
    Route::get('admin/gallery/show/{id}', ['as' => 'admin.gallery.show', 'uses' => 'Admin\GalleryController@show']);
    Route::get('admin/gallery/edit/{id}', ['as' => 'admin.gallery.edit', 'uses' => 'Admin\GalleryController@edit']);
    Route::put('admin/gallery/updates/{id}', ['as' => 'admin.gallery.update', 'uses' => 'Admin\GalleryController@update']);
    Route::get('admin/gallery/editImage/{id}', ['as' => 'admin.gallery.editImage.index', 'uses' => 'Admin\GalleryController@editImage']);
    Route::post('admin/gallery/updateImage/{id}', ['as' => 'admin.gallery.updateImage', 'uses' => 'Admin\GalleryController@updateImage']);
    Route::get('admin/gallery/delete/{id}', ['as' => 'admin.gallery.delete', 'uses' => 'Admin\GalleryController@destroy']);
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
  });
});
