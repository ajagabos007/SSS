<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdministratorLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdministratorLoginController@login')->name('admin.login.submit');
    Route::get('','AdministratorsController@index')->name('admin');
    //Route::resource('','AdministratorsController'); 
});

Route::prefix('guardian')->group(function(){
    Route::get('/login','Auth\GuardianLoginController@showLoginForm')->name('guardian.login');
    Route::post('/login','Auth\GuardianLoginController@login')->name('guardian.login.submit');
    Route::get('profile/edit/{id}','GuardiansController@edit')->name('guardian/profile/edit');
    Route::get('profile/{id}','GuardiansController@show')->name('guardian/profile');
    Route::get('','GuardiansController@index')->name('guardian');
    Route::post('/update','GuardiansController@update')->name('guardian/update');
});

Route::resource('security_organisations','Security_organisationsController');

Route::prefix('security')->group(function(){
    Route::get('/login','Auth\SecurityLoginController@showLoginForm')->name('security.login');
    Route::post('/login','Auth\SecurityLoginController@login')->name('security.login.submit');
    Route::get('','SecuritiesController@index')->name('security');
});

Route::prefix('staff')->group(function(){
    Route::get('/login','Auth\StaffLoginController@showLoginForm')->name('staff.login');
    Route::post('/login','Auth\StaffLoginController@login')->name('staff.login.submit');
    Route::get('','StaffsController@index')->name('staff');
});
Route::prefix('lga')->group(function(){
  Route::get('/create','LgasController@create')->name('lga.create');
  Route::get('/','LgasController@index')->name('lga');
});

Route::resource('countries','CountriesController');
Route::resource('genders','GendersController');
Route::resource('school_types','School_typesController');
Route::resource('states','StatesController');
Route::resource('students','StudentsController');
Route::resource('titles','TitlesController');
