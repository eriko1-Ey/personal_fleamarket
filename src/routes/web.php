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


//テスト用（view)
Route::get('/test-layout', function () {
    return view('sell');
});




//ログイン済み、未ログインユーザーの両方閲覧できる画面
//未ログインユーザーのみ
//ログインユーザーのみ
