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


Route::get('test', function () {
        return view('test');
    });
        

Route::get('user/{name}', function ($name) {
       return "Hello".$name ;
    })->where('name', '[A-Za-z]+');
    
    

Route::get('login', 'Auth\LoginController@test');

Route::get('profile', [
    'middleware' => 'App\Http\Middleware\Auth',
    'uses' => 'Controller@test'
]);

Route::get('artisan', function () {
    echo '<br>init migrate:...';
    Artisan::call('make:migration', ['name' => 'user']);
    echo 'done migrate:install';
});
 
 










