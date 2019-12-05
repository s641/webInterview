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

// 进入调查问卷页面
Route::get("/survey", "SurveyController@paper");

// 提交问卷
Route::post("/finish", "SurveyController@finish");
