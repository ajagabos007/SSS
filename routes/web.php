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
Route::post('/logout','Auth\LoginController@studentLogout')->name('student.logout');

Route::prefix('admin')->group(function(){
 
    Route::get('guardians','GuardiansController@index')->name('guardian');
    Route::get('guardians','GuardiansController@create')->name('guardians.create');

    Route::get('/login','AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout','AuthAdmin\LoginController@logout')->name('admin.logout');

    // Admin password reset routes
    Route::post('/password/email','AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset','AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset','AuthAdmin\ResetPasswordController@reset');
    Route::get('password/reset/{token}','AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
  
    Route::get('profile/{administrator}','AdministratorsController@show')->name('admin.profile');
    Route::get('profile/edit/{administrator}','AdministratorsController@edit')->name('admin.profile.edit');
    Route::post('profile/update/{administrator}','AdministratorsController@update')->name('admin.profile.update');
    Route::get('dashboard','AdministratorsController@dashboard')->name('admin.dashboard');
    Route::get('management','AdministratorsController@manage')->name('admin.manage');

    Route::resource('schools','SchoolsController')->middleware('auth:administrator');
    Route::resource('staffs','StaffsController')->middleware('auth:administrator');
    Route::resource('guardians','GuardiansController')->middleware('auth:administrator');

    // Route::get('staffs','StaffsController@index')->name('staffs');
    // Route::get('staffs/register','StaffsController@create')->name('staffs.create');


    Route::get('students','StudentsController@index')->name('students');
    Route::get('','AdministratorsController@index')->name('admin');

    //Route::resource('','AdministratorsController'); 
});


Route::prefix('guardian')->group(function(){
    Route::get('/login','AuthGuardian\LoginController@showLoginForm')->name('guardian.login');
    Route::post('/login','AuthGuardian\LoginController@login')->name('guardian.login.submit');
    Route::post('/logout','AuthGuardian\LoginController@logout')->name('guardian.logout');
    Route::get('profile/edit/{id}','GuardiansController@edit')->name('guardian/profile/edit');
    Route::get('profile/{id}','GuardiansController@show')->name('guardian/profile');
    Route::post('/update','GuardiansController@update')->name('guardian/update');
    Route::get('','GuardiansController@index')->name('guardian');
});

Route::resource('security_organisations','Security_organisationsController');
Route::prefix('security')->group(function(){
    Route::get('/login','AuthSecurity\LoginController@showLoginForm')->name('security.login');
    Route::post('/login','AuthSecurity\LoginController@login')->name('security.login.submit');
    Route::get('','SecuritiesController@index')->name('security');
});

Route::prefix('staff')->group(function(){
    Route::get('/login','AuthStaff\LoginController@showLoginForm')->name('staff.login');
    Route::middleware('auth:staff')->group(function(){
        Route::post('/login','AuthStaff\LoginController@login')->name('staff.login.submit');
        Route::get('','StaffsController@index')->name('staff');
    });
    
});
Route::prefix('lga')->group(function(){
  Route::get('/create','LgasController@create')->name('lga.create');
  Route::get('/','LgasController@index')->name('lga');
});
Route::get('getStates','AjaxRequestController@getStates')->name('getStates');
Route::get('getLgas','AjaxRequestController@getLgas')->name('getLgas');
Route::get('getClasses','AjaxRequestController@getClasses')->name('getClasses');

Route::resource('countries','CountriesController');
Route::resource('genders','GendersController');
Route::resource('school_types','School_typesController');
Route::resource('states','StatesController');
Route::resource('students','StudentsController');
Route::resource('titles','TitlesController');
