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
    Route::get('admin/user/create', ['as' => 'admin.user.create', 'uses' => 'Admin\UserController@create']);
    Route::post('admin/user/store', ['as' => 'admin.user.store', 'uses' => 'Admin\UserController@store']);
    
    Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update']);
    Route::get('admin/user/edits/{id}', ['as' => 'admin.user.edits', 'uses' => 'Admin\UserController@edits']);
    Route::put('admin/user/updates/{id}', ['as' => 'admin.user.updates', 'uses' => 'Admin\UserController@updates']);
    Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
    Route::get('admin/user/userSearch', ['as' => 'admin.user.userSearch', 'uses' => 'Admin\UserController@search']);
    Route::get('admin/signup/logs', ['as' => 'admin.signup.log', 'uses' => 'Admin\CredencialController@log']);
    /* end */

    
    Route::middleware(['Editor'])->group(function () {

      /* User */

      Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(['Administrador']);
    Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(['Administrador']);

    /* pacient */
    Route::get('admin/pacient/index', ['as' => 'admin.pacient.index', 'uses' => 'Admin\PacientController@index'])->withoutMiddleware(['Administrador']);
    Route::get('admin/pacient/show/{id}', ['as' => 'admin.pacient.show', 'uses' => 'Admin\PacientController@show'])->withoutMiddleware(['Administrador']);
    Route::get('admin/pacient/create', ['as' => 'admin.pacient.create', 'uses' => 'Admin\PacientController@create'])->withoutMiddleware(['Administrador']);
    Route::post('admin/pacient/store', ['as' => 'admin.pacient.store', 'uses' => 'Admin\PacientController@store'])->withoutMiddleware(['Administrador']);
    
    Route::get('admin/pacient/edit/{id}', ['as' => 'admin.pacient.edit', 'uses' => 'Admin\PacientController@edit'])->withoutMiddleware(['Administrador']);
    Route::put('admin/pacient/update/{id}', ['as' => 'admin.pacient.update', 'uses' => 'Admin\PacientController@update'])->withoutMiddleware(['Administrador']);
    Route::get('admin/pacient/delete/{id}', ['as' => 'admin.pacient.delete', 'uses' => 'Admin\PacientController@destroy'])->withoutMiddleware(['Administrador']);

    /** Pdf */
    Route::get('admin/pacient/pdf/list', ['as' => 'admin.pacient.pdf.list', 'uses' => 'Admin\PacientController@pdflist'])->withoutMiddleware(['Administrador']);
    Route::get('admin/pacient/pdf/show/{id}', ['as' => 'admin.pacient.pdf.show', 'uses' => 'Admin\PacientController@pdfshow'])->withoutMiddleware(['Administrador']);
    /* end */
  });
  });
});
