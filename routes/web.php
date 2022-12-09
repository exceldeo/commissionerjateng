<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@home')->name('home');
Route::get('/about','PagesController@about')->name('about');
// Route::get('/galery','PagesController@galery')->name('galery');
Route::get('/pengawas','PagesController@pengawas')->name('pengawas');
Route::get('/contact','PagesController@contact')->name('contact');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::prefix('pengawas')->name('pengawas.')->group(function () {
        Route::get('/', 'Admin\PengawasController@index')->name('index');
        Route::get('/create', 'Admin\PengawasController@create')->name('create');
        Route::post('/', 'Admin\PengawasController@store')->name('store');
        Route::get('/{id}', 'Admin\PengawasController@show')->name('show');
        Route::get('/{id}/edit', 'Admin\PengawasController@edit')->name('edit');
        Route::put('/{id}', 'Admin\PengawasController@update')->name('update');
        Route::get('/{id}/delete', 'Admin\PengawasController@destroy')->name('destroy');

        Route::prefix('kegiatan')->name('kegiatan.')->group(function () {
            Route::get('/{idPengawas}/create', 'Admin\KegiatanController@create')->name('create');
            Route::post('/{idPengawas}', 'Admin\KegiatanController@store')->name('store');
            Route::get('/{id}/delete', 'Admin\KegiatanController@destroy')->name('destroy');
        });
    });

    // Route::prefix('galery')->name('galery.')->group(function () {
    //     Route::get('/', 'Admin\GaleryController@index')->name('index');
    //     Route::get('/create', 'Admin\GaleryController@create')->name('create');
    //     Route::post('/', 'Admin\GaleryController@store')->name('store');
    //     Route::get('/{id}', 'Admin\GaleryController@show')->name('show');
    //     Route::get('/{id}/delete', 'Admin\GaleryController@destroy')->name('destroy');
    // });

    Route::prefix('pengumuman')->name('pengumuman.')->group(function () {
        Route::get('/edit', 'Admin\PengumumanController@edit')->name('edit');
        Route::put('/', 'Admin\PengumumanController@update')->name('update');
    });

    Route::prefix('contact')->name('contact.')->group(function () {
        Route::get('/edit', 'Admin\ContactController@edit')->name('edit');
        Route::put('/', 'Admin\ContactController@update')->name('update');
    });
 });



Auth::routes();

