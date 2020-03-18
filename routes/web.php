<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "MovieController@index");
Route::get('/movie/{id}', "MovieController@show");

Route::get('/about', "PageController@about");

Route::get('/contact', "ContactController@index");
Route::post('/contact', "ContactController@sendMail");

Route::get('/getSeats/{id}', "ShowTimeController@show");

Route::get('/activate/{key}', "UserController@activate");

Route::group(['middleware' => ['checkLogin']], function () {

    Route::get('/logout', "UserController@logout");
    Route::post('/reserve', "ReservationController@store");
    Route::get('/reservations', "ReservationController@index");
    Route::get('/reservation/delete/{id}', "ReservationController@destroy");
});

Route::group(['prefix' => 'admin', 'middleware' => ['checkAdmin']], function () {

    Route::get('/display', "PageController@adminDisplay");
    Route::get('/insert', "PageController@adminInsert");
    Route::get('/logs', "LogController@index");

    Route::group(['prefix' => 'insert'], function () {

        Route::get('/Actors', "ActorController@create");
        Route::get('/Countries', "CountryController@create");
        Route::get('/Directors', "DirectorController@create");
        Route::get('/Genres', "GenreController@create");
        Route::get('/Languages', "LanguageController@create");
        Route::get('/Movies', "MovieController@create");
        Route::get('/Featuredfilms', "FeaturedFilmController@create");
        Route::get('/Showtimes', "ShowTimeController@create");
        Route::get('/Users', "UserController@create");

        Route::post('/Actor', "ActorController@store");
        Route::post('/Country', "CountryController@store");
        Route::post('/Director', "DirectorController@store");
        Route::post('/Genre', "GenreController@store");
        Route::post('/Language', "LanguageController@store");
        Route::post('/Movie', "MovieController@store");
        Route::post('/FeaturedFilm', "FeaturedFilmController@store");
        Route::post('/ShowTime', "ShowTimeController@store");
        Route::post('/User', "UserController@adminStore");
    });

    Route::group(['prefix' => 'display'], function () {

        Route::get('/Actors', "ActorController@indexTable");
        Route::get('/Countries', "CountryController@indexTable");
        Route::get('/Directors', "DirectorController@indexTable");
        Route::get('/Genres', "GenreController@indexTable");
        Route::get('/Languages', "LanguageController@indexTable");
        Route::get('/Movies', "MovieController@indexTable");
        Route::get('/Featuredfilms', "FeaturedFilmController@indexTable");
        Route::get('/Showtimes', "ShowTimeController@indexTable");
        Route::get('/Reservations', "ReservationController@indexTable");
        Route::get('/Users', "UserController@indexTable");
    });

    Route::group(['prefix' => 'delete'], function () {

        Route::get('/Actor/{id}', "ActorController@destroy");
        Route::get('/Country/{id}', "CountryController@destroy");
        Route::get('/Director/{id}', "DirectorController@destroy");
        Route::get('/Genre/{id}', "GenreController@destroy");
        Route::get('/Language/{id}', "LanguageController@destroy");
        Route::get('/Movie/{id}', "MovieController@destroy");
        Route::get('/FeaturedFilm/{id}', "FeaturedFilmController@destroy");
        Route::get('/ShowTime/{id}', "ShowTimeController@destroy");
    });

    Route::group(['prefix' => 'edit'], function () {

        Route::get('/Actor/{id}', "ActorController@edit");
        Route::get('/Country/{id}', "CountryController@edit");
        Route::get('/Director/{id}', "DirectorController@edit");
        Route::get('/Genre/{id}', "GenreController@edit");
        Route::get('/Language/{id}', "LanguageController@edit");
        Route::get('/Movie/{id}', "MovieController@edit");
        Route::get('/FeaturedFilm/{id}', "FeaturedFilmController@edit");
        Route::get('/ShowTime/{id}', "ShowTimeController@edit");
        Route::get('/User/{id}', "UserController@edit");

        Route::post('/Actor/{id}', "ActorController@update");
        Route::post('/Country/{id}', "CountryController@update");
        Route::post('/Director/{id}', "DirectorController@update");
        Route::post('/Genre/{id}', "GenreController@update");
        Route::post('/Language/{id}', "LanguageController@update");
        Route::post('/Movie/{id}', "MovieController@update");
        Route::post('/FeaturedFilm/{id}', "FeaturedFilmController@update");
        Route::post('/ShowTime/{id}', "ShowTimeController@update");
        Route::post('/User/{id}', "UserController@update");
    });
});

Route::group(['middleware' => ['checkNoLogin']], function () {
    Route::get('/register', "PageController@register");
    Route::post('/register', "UserController@store");

    Route::get('/login', "UserController@index");
    Route::post('/login', "UserController@login");
});
