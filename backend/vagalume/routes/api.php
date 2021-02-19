<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('musics', [MusicController::class, 'index']);
Route::get('musics/{title}', [MusicController::class, 'show']);
Route::post('musics', [MusicController::class, 'create']);
Route::put('musics/{id}', [MusicController::class, 'update']);
Route::delete('musics/{id}', [MusicController::class, 'delete']);
