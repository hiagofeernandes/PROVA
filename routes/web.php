<?php

Route::get('/home', 'HomeController@index');

Route::resources([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

Route::get('/', function () {
    return view('welcome');
});
