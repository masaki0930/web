<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/tasklogin', function () {
    return 'ログイン画面';
});
Route::get('/taskregister',function (){
    return 'タスク登録画面';
});
Route::get('/taskdisplay',function (){
    return 'タスク表示画面';
});
Route::get('/taskhistory',function (){
    return 'タスク履歴画面';
});
Route::get('/taskshare',function (){
    return 'タスク共有画面';
});
Route::get('/taskchange',function (){
    return 'タスク変更画面';
});
Route::get('/taskdelete',function (){
    return 'タスク削除画面';
});
Route::get('/tasknotification',function (){
    return 'タスク通知画面';
});
Route::get('/taskpriority',function (){
    return 'タスク優先順位画面';
});
Route::get('/taskgrouping',function (){
    return 'タスクグループ分け画面';
});
Route::get('/taskURLpasting',function (){
    return 'タスクurl貼り付け画面';
});
Route::get('/taskcompletion',function (){
    return 'タスク完了画面';
});

Route::get('/',function (){
    return 'タスク完了画面';
});