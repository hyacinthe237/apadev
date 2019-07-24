<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('admin/login', 'Views\Backend\AuthController@login')->name('admin.login');
Route::post('admin/login', 'Views\Backend\AuthController@signin')->name('admin.signin');

Route::group(['prefix' => 'admin', 'middleware' => ['admin_auth', 'admin']], function() {
    Route::get('/', 'Views\Backend\AdminController@dashboard')->name('admin');

    Route::resource('users', 'Views\Backend\UserController');
    Route::resource('roles', 'Views\Backend\RoleController');
    Route::resource('permissions', 'Views\Backend\PermissionController');
});
