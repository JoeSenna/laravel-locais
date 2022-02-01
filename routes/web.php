<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;

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

Route::get('/', [PlaceController::class, 'index']);
Route::get('/places', [PlaceController::class, 'index' ]);
Route::get('/places/create', [PlaceController::class, 'create' ]);
Route::post('/places/store', [PlaceController::class, 'store' ]);
Route::get('/places/show/{id}', [PlaceController::class, 'show' ]);
Route::get('/places/edit/{id}', [PlaceController::class, 'edit' ]);
Route::post('/places/update/{id}', [PlaceController::class, 'update' ]);
Route::get('/places/delete/{id}', [PlaceController::class, 'delete' ]);
