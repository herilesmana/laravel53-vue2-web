<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('users', function () {
// 	$users = [
// 		'0' => [
// 			'first_name' => 'Heri',
// 			'last_name' => 'Lesmana',
// 			'address' => 'Sunagara'
// 		],
// 		'1' => [
// 			'first_name' => 'Leni',
// 			'last_name' => 'Marlina',
// 			'address' => 'Lupa'
// 		]
// 	];
// 	return $users;
// });

Route::get('users', ['uses' => 'UsersController@index']);
Route::get('users/create', ['uses' => 'UsersController@create']);
Route::post('users', ['uses' => 'UsersController@store']);
Auth::routes();

Route::get('/home', 'HomeController@index');
