<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;


Route::get('/', [BlogController::class, 'display']) -> name('display') ;
Route::get('/login', [BlogController::class , 'login']) -> name('login');
Route::post('/',[BlogController::class, 'store'] ) -> name('store');



Route::get('/users', [UserController::class, 'displayForm']) -> name('displayForm');
Route::get('/users/{id}', [UserController::class, 'getUserByID']) -> name('getUserByID');
Route::post('/users', [UserController::class, 'createUser']) -> name('createUser');
