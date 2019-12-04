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

Route::get('/', 'MyPageController@index')->middleware('auth');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mypage', 'MyPageController@index')->name('mypage')->middleware('auth');

Route::get('/users/{user}', 'UserController@show');

Route::resource('stores', 'StoreController');

Route::get('/stores/{store_id}/reviews/create', 'StoreReviewController@create')->middleware('auth');
Route::post('/storeReviews', 'StoreReviewController@store')->middleware('auth');

Route::get('/projects/{project}', 'ProjectController@show');
Route::get('/stores/{store_id}/projects/create', 'ProjectController@create')->middleware('auth');
Route::post('/projects', 'ProjectController@store')->middleware('auth');

Route::get('/trials/{trial}', 'TrialController@show');
Route::get('/projects/{project_id}/trials/create', 'TrialController@create')->middleware('auth');
Route::post('/trials', 'TrialController@store')->middleware('auth');

Route::post('/comments', 'CommentController@store')->middleware('auth');

Route::post('/like_stores', 'LikeStoreController@store')->middleware('auth');

Route::post('/like_projects', 'LikeProjectController@store')->middleware('auth');

Route::post('/like_trials', 'LikeTrialController@store')->middleware('auth');

Route::post('/like_users', 'LikeUserController@store')->middleware('auth');
