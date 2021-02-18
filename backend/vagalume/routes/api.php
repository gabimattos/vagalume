<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;

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
Route::get('searchAlbums/{title}', [AlbumController::class, 'searchAlbum']);
Route::post('albums', [AlbumController::class, 'create']);
Route::put('albums/{id}', [AlbumController::class, 'update']);
Route::delete('albums/{id}', [AlbumController::class, 'delete']);
