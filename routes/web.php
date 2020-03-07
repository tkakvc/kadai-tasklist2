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

// Route::get('/', function () {
//     return view('welcome');
// });
// //詳細ページ
// Route::get('tasks/{id}','TasksController@show');
// //新規登録の処理
// Route::post('tasks','TasksController@store');
// //更新処理
// Route::put('tasks{id}','TasksController@update');
// //タスクを削除
// Route::delete('tasks/{id}','TasksController@destroy');

// //index: showの補助ページ
// Route::get('tasks','TasksController@index')->name('tasks.index');
// //create:新規作成用のフォームページ
// Rpute::get('tasks/create','TasksController@create')->name('tasks.create');
// //edit:更新用のフォームページ

Route::get('/','TasksController@index');
// Route::get('tasks/{id}/edit','TasksController@edit')->name('tasks.edit')
 Route::resource('tasks','TasksController');
 //複写機能（ボタン）
 //Route::get('tasks/{id}/copy','TasksController@copy');