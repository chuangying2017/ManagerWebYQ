<?php
/**
 * Created by PhpStorm.
 * User: 张伟
 * Date: 2018/11/3
 * Time: 16:23
 */


Route::resource('login','Admin\LoginController');

Route::group(['prefix'=>'TestAdmin','namespace'=>'Admin','middleware' => 'auth:web'],function(){
    Route::get('index','IndexController@index');
    Route::get('manager/admin_role','RoleController@index');
    Route::get('manager/add_role','RoleController@add_inode_page');
    Route::get('manager/permission','PermissionController@index');
    Route::any('manager/permission-add','PermissionController@permission_add_page')->name('manager.permissionAdd');
    Route::get('welcome',function(){
        return view('admin.welcome');
    });
});