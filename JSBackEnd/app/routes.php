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
//

// Route::get('/', function() {
//     return View::make('hello');
// //    echo "hello word";
// });

Route::get('/test', function(){
    return Hash::make('fdhdfh');
});

Route::get('/', 'AdminBaseController@loginView');
//Route::get('/register', 'UserPublicController@register');
//Route::post('/index/zuoq', 'AdminBaseController@loginView');
 Route::post('/index/{id}', 'AdminBaseController@login');

//用户(前端)
Route::group(['prefix'=>'User'],function() {
   Route::post('/register',['as'=>'user.register','uses'=>'UserPublicController@register']);
   Route::post('/login',['as'=>'user.login','uses'=>'UserPublicController@login']);
});

