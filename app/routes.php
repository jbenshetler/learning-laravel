<?php




Route::get('login','SessionsController@create');
Route::get('logout','SessionsController@destroy');
Route::get('admin',function(){
    return 'Admin Page';
})->before('auth');

Route::resource('sessions','SessionsController');

Route::resource('users','UsersController');





