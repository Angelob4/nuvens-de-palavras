<?php

use App\Http\Controllers\WordCloudController;
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

Route::get('/', [WordCloudController::class, 'index']);
Route::post('/', [WordCloudController::class, 'insert']);
Route::get('/create', [WordCloudController::class, 'create']);
