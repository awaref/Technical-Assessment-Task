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

//Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  
    //CRUDS routes
    Route::resource('/users', 'AdminUsersController',['names'=>[

        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'store'=>'admin.users.store',
        'edit'=>'admin.users.edit'
    ]]);
    Route::resource('/companies', 'CompaniesController',['names'=>[

        'index'=>'admin.companies.index',
        'create'=>'admin.companies.create',
        'store'=>'admin.companies.store',
        'edit'=>'admin.companies.edit'
    ]]);
    Route::resource('/employees', 'EmployeeController',['names'=>[

        'index'=>'admin.employees.index',
        'create'=>'admin.employees.create',
        'store'=>'admin.employees.store',
        'edit'=>'admin.employees.edit'
    ]]);
});

