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

Route::get('/', 'PagesController@home')->name('home');

Route::get('posts', 'PagesController@home');
Route::get('blog/{post}', 'PostsController@show')->name('posts.show');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth'
], function (){
    Route::get('/', 'AdminController@index')->name('dashboard');

    Route::get('posts', 'PostsController@index')->name('admin.posts.index');
    //Route::get('posts/create','PostsController@create')->name('admin.posts.create');
    Route::post('posts', 'PostsController@store')->name('admin.posts.store');
    Route::get('posts/{post}/edit', 'PostsController@edit')->name('admin.posts.edit');
    Route::put('posts/{post}', 'PostsController@update')->name('admin.posts.update');
    Route::post('posts/{post}/photos','PhotosController@store')->name('admin.posts.photos.store');
    //Resto de rutas administrativas
});



/*
 * Si ponemos Route::auth(); nos pondria todas las rutas de auth
 * Como en este caso no nos interesa, ya que  solo queremos las rutas para logear y logout
 *  hay que buscar las rutas de auth que estan en
 * vendor/laravel/framework/src/Illuminate/Routing/Router.php
 * */


//Rutas de login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Rutas de registro
//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//$this->post('register', 'Auth\RegisterController@register');
