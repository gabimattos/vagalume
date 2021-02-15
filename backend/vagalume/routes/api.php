<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;

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

Route::get('artists', [ArtistController::class, 'index']);
Route::get('artists/{id}', [ArtistController::class, 'show']);
Route::post('artists', [ArtistController::class, 'create']);
Route::put('artists/{id}', [ArtistController::class, 'update']);
Route::delete('artists/{id}', [ArtistController::class, 'delete']);
