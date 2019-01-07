<?php
use Illuminate\Support\Facades\Redis;
Redis::set('name', 'Taylor');

Route::get('/', function () {
   echo  $user = Redis::get('name');
   exit;
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
