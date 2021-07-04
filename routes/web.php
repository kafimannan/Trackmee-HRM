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

Route::get('/','FrontendController@index')->name('index');

Route::post('/','LoginController@index')->name('login.index');
Route::get('/logout','LogoutController@index')->name('logout.index');

Route::get('/about','FrontendController@about')->name('about');
Route::get('/contact','FrontendController@contact')->name('contact');
Route::get('/contact','FrontendController@contact')->name('contact');
Route::get('/contact','FrontendController@contact')->name('contact');

Route::get('/admin','AdminController@index')->name('admin.index');

Route::get('/admin/tracker/show','TrackerProfileController@show')->name('admin.tracker.show');

Route::get('/admin/tracker/add','TrackerProfileController@add')->name('admin.tracker.add');
Route::post('/admin/tracker/add','TrackerProfileController@store')->name('admin.tracker.store');


Route::get('/admin/tracker/edit/{id}','TrackerProfileController@edit')->name('admin.tracker.edit');
Route::post('/admin/tracker/edit/{id}','TrackerProfileController@update')->name('admin.tracker.update');

//Route::get('/admin/tracker/delete/{id}','TrackerProfileController@ddestroy')->name('admin.tracker.destroy');
Route::post('/admin/tracker/delete/{id}','TrackerProfileController@delete')->name('admin.tracker.delete');

Route::get('/admin/tracker/unlock','TrackerProfileController@unlock')->name('admin.tracker.unlock');
Route::post('/admin/tracker/unlock','TrackerProfileController@send')->name('admin.tracker.send');

Route::get('/admin/device/show','DeviceController@show')->name('admin.device.show');
Route::get('/admin/device/add','DeviceController@add')->name('admin.device.add');
Route::get('/tracker','TrackerController@index')->name('tracker.index');

Route::get('/admin/employee/show','EmployeeProfileController@show')->name('admin.employee.show');

Route::get('/admin/employee/add','EmployeeProfileController@add')->name('admin.employee.add');
Route::post('/admin/employee/add','EmployeeProfileController@store')->name('admin.employee.store');


Route::get('/admin/employee/edit/{id}','EmployeeProfileController@edit')->name('admin.employee.edit');
Route::post('/admin/employee/edit/{id}','EmployeeProfileController@update')->name('admin.employee.update');

//Route::get('/admin/tracker/delete/{id}','TrackerProfileController@ddestroy')->name('admin.tracker.destroy');
Route::post('/admin/employee/delete/{id}','EmployeeProfileController@delete')->name('admin.employee.delete');