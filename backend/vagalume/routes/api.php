<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
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
    return $request->user(); // retorna uma instancia do usuário autenticado
});

Route::get('albums', [AlbumController::class, 'index']);
Route::get('albums/{id}', [AlbumController::class, 'show']);
Route::post('albums', [AlbumController::class, 'create']);
Route::put('albums/{id}', [AlbumController::class, 'update']);
Route::delete('albums/{id}', [AlbumController::class, 'delete']);

Route::get('artists', [ArtistController::class, 'index']);
Route::get('artists/{id}', [ArtistController::class, 'show']);
Route::post('artists', [ArtistController::class, 'create']);
Route::put('artists/{id}', [ArtistController::class, 'update']);
Route::delete('artists/{id}', [ArtistController::class, 'delete']);

Route::get('musics', [MusicController::class, 'index']);
Route::get('musics/{id}', [MusicController::class, 'show']);
Route::post('musics', [MusicController::class, 'create']);
Route::put('musics/{id}', [MusicController::class, 'update']);
Route::delete('musics/{id}', [MusicController::class, 'delete']);
