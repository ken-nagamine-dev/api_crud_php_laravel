<?php
use App\Models\Post;
use App\Http\Controllers\NameModelApiController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/nameModel', [NameModelApiController::class, 'index']);
Route::get('nameModel/{id}', [NameModelApiController::class, 'show']);
Route::post('/nameModel', [NameModelApiController::class, 'store']);
Route::put('/nameModel/{id}', [NameModelApiController::class, 'update']);
Route::delete('/nameModel/{id}', [NameModelApiController::class, 'destroy']);

