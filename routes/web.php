<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ImagesController;
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

Route::get('/', [ImagesController::class, 'index']);

Route::get('/addImage', [ImagesController::class, 'addImage']);

Route::post('/store', [ImagesController::class, 'store']);

Route::post('/updateImage/{id}', [ImagesController::class, 'updateImage']);

Route::get('/editImage/{id}', [ImagesController::class, 'editImage']);

Route::get('/showImage/{id}', [ImagesController::class, 'showImage']);

Route::get('/deleteImage/{id}', [ImagesController::class, 'deleteImage']);

Route::get('/about', [AboutController::class, 'index']);

