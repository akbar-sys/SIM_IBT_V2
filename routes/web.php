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


// Route::get('home', function () {
//     return view('home');
// });

// Route::get('dashboard', function () {
//     return view('home');
// });

// untuk tes main2
// Route::get('x', function () {
    //     return view('main2');
    // });

Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@authenticate');
Route::get('/register', 'registerController@index');
Route::post('/register', 'registerController@authenticate');
Route::post('/logout', 'loginController@logout');
// Route::get('/regis', 'loginController@regis');

//landing page
Route::get('/','idProfileController@data');
Route::get('/organisasi','idOrganizationController@data');
Route::get('/program','idProgramsController@data');
// Route::get('/registrasi','idRegisTenantController@data')->middleware('auth');
// Route::post('/registrasi','idRegisTenantController@add');
Route::resource('/berita', 'idNewsController');
Route::get('/kontak','idContactController@data');

// dashboard admin
Route::resource('/analytics', 'analyticsController')->middleware('auth');
Route::resource('/daftarTenant', 'daftarTenantController')->middleware('auth');
Route::resource('/profile', 'profileController')->middleware('auth');
Route::resource('/organization', 'organizationController')->middleware('auth');
Route::resource('/programs', 'programsController')->middleware('auth');
Route::resource('/news', 'newsController')->middleware('auth');
Route::resource('/contact', 'contactController')->middleware('auth');
Route::resource('/regisTenant', 'regisTenantController')->middleware('auth');

//landing page tenant
Route::get('/mainTenant','tnProfileController@data')->middleware('auth');
Route::get('/tnOrganisasi','tnOrganizationController@data')->middleware('auth');
Route::get('/tnProgram','tnProgramsController@data')->middleware('auth');
Route::get('/tnRegistrasi','tnRegisTenantController@data')->middleware('auth');
Route::post('/tnRegistrasi','tnRegisTenantController@add')->name('tnRegistrasi.add')->middleware('auth');
Route::resource('/tnBerita', 'tnNewsController')->middleware('auth');
Route::get('/tnKontak','tnContactController@data')->middleware('auth');

// dashboard tenant
Route::resource('/biodata', 'tnBiodataController')->middleware('auth');
Route::resource('/status', 'tnStatusController')->middleware('auth');

// route::get('email', 'emailController@index');