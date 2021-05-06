<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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
// Public routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/member',[UserController::class,'store']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/book',[BookController::class,'index']);
    Route::post('/book',[BookController::class,'store']);
    Route::get('/book/{id}',[BookController::class,'show']);
    Route::put('/book/{id}',[BookController::class,'update']);
    Route::delete('/book/{id}',[BookController::class,'destroy']);

    Route::get('/member',[UserController::class,'index']);
    Route::get('/member/{id}',[UserController::class,'show']);
    Route::put('/member/{id}',[UserController::class,'update']);
    Route::delete('/member/{id}',[UserController::class,'destroy']);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
