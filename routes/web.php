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

Route::get('header1', function () {
    return view('header1');
});
Route::get('ManageRoles', function () {
    return view('ManageRoles');
});

Route::get('ManageUsers', function () {
    return view('ManageUsers');
});


Route::get('AddEditUsers', function () {
    return view('AddEditUsers');
});
Route::get('AddEditRoles', function () {
    return view('AddEditRoles');
});





Route::post('ManageRoles','ManageRolesController@insert');
Route::get('ManageRoles','ManageRolesController@ShowManageRoles');

Route::get('ManageRoles/{id}','ManageRolesController@EditManageRoles');