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
    return view('Reciption');
});

Route::get('aboutUs', function () {
    return view('aboutUs');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('home', function () {
    return view('home');
});

Route::get('Rental', function () {
    return view('Rental');
});
Route::get('TaxiService', 'taxiofficeController@show');

Auth::routes();
Route::get('/home', 'HomeController@index1')->name('home');
Route::get('/aboutUs', 'HomeController@index2')->name('aboutUs');
Route::get('/contact', 'HomeController@index3')->name('contant');
Route::get('/TaxiService', 'HomeController@index4')->name('TaxiService');
Route::get('/Rental', 'HomeController@index5')->name('Rental');
Route::get('/MangerTaxiOffice', 'MangerTController@show');
Route::get('/changepassword', 'HomeController@password');
Route::get('editaccount', 'HomeController@account');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
Route::post('/Editaccount','HomeController@editaccount')->name('Editaccount');
Route::get('/admin', 'AdminController@show');
Route::post('/admin/add', 'AdminController@create')->name('admin_add');
Route::post('/admin/updaterole/{User}', 'AdminController@update')->name('UpdateRole');
Route::post('/admin/edit', 'AdminController@edit')->name('EditOfficeTaxis');
Route::post('admin/delUser', 'AdminController@delUser')->name('DeleteUser');
Route::post('/admin/deletetaxioffice', 'AdminController@delT')->name('DelTaxiOff');
Route::post('/admin/addOfficeCar', 'AdminController@store')->name('AddOfficeCar');
Route::post('/admin/editOfficeCar', 'AdminController@editOfficeCar')->name('EditOfficeCar');
Route::post('/admin/deleteOfficeCar', 'AdminController@delete')->name('DeleteOfficeCar');
Route::post('/admin/addDrivers', 'AdminController@addDrivers')->name('AddDrivers');
Route::post('/admin/deleteDriver', 'AdminController@deleteDriver')->name('DeleteDriver');
Route::post('/admin/add-tax', 'AdminController@addtax')->name('add-tax');
Route::post('/taxilive', 'taxiofficeController@orderlive');
Route::post('/Requests', 'MangerTController@serve')->name('Requests');
Route::post('/manager/servord', 'MangerTController@servord')->name('ServeOrd');
Route::post('/admin/updateidof', 'AdminController@updateidof')->name('AssociateDriverWithOffice');
Route::post('/MakeAvailable', 'MangerTController@available')->name('MakeAvailable');


