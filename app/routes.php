<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', function() {
    $page_title = "Home";
    return View::make('home')->with('page_title', $page_title);
});

Route::get('/about', function() {
    $page_title = "About this Project";
    return View::make('about')->with('page_title', $page_title);
});

Route::resource('users', 'UsersController');