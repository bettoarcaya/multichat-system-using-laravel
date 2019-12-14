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

Route::get('/','WebController@home')->name('home');

Route::group(['prefix' => 'index', 'middleware' => 'auth'], function(){
  Route::get('/','WebController@index')->name('perfil');
  Route::get('/chat', 'WebController@chat')->name('chat');
  Route::get('/editar', 'WebController@editar')->name('editar');
  Route::get('/perfil', 'WebController@perfil')->name('perfil');

  /*Route::get('/sentMsj',function(){
    # code...
    if(Request::ajax()){
      return ;
    }
  });*/

  Route::resource('user','UserController', ['only' => ['edit','update','show','index']]);

 });

WebSocketsRouter::webSocket('/websocket', \App\services\CustomWebSocketHandler::class);

Auth::routes();
