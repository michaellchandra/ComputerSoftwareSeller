<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SoftwareController;
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

Route::get('/', [MainController::class, 'index']);
// Route::get('/software', [SoftwareController::class, 'viewSoftwareList']);
// Route::get('/addSoftware',[SoftwareController::class, 'addSoftwareList']);
// Route::post('/addData',[SoftwareController::class, 'addSoftwareData']);
// Route::post('/addCategory',[CategoryController::class, 'addCategory']);    

Route::resource('software', SoftwareResourceController::class);
Route::resource('Category', CategoryController::class);