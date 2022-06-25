<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KusController;
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


Route::get('/', [KusController::class,'landing']);

Route::get('/landing', [KusController::class,'landing']) -> name('landing');

Route::get('/blog', [KusController::class,'blog']);
Route::get('/auth', [KusController::class,'auth']) ->name('auth');
Route::get('/post/{post_name}', [KusController::class,'post']);

Route::get('/reg', [KusController::class,'reg']);
Route::post('/reg/check', [KusController::class,'reg_check']);
Route::post('/auth/check', [KusController::class,'auth_check']);
Route::post('/post/post_comment', [KusController::class, 'post_comment']);


