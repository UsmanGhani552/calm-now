<?php

use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\ExerciseController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\SoundController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::get('auth/google/callback', [AuthController::class, 'loginWithGoogle']);


Route::middleware('auth:api')->group( function () {

    //exercise
    Route::post('store-exercise', [ExerciseController::class,'storeExercise']);
    Route::get('get-exercises', [ExerciseController::class,'getExercise']);

    //sound
    Route::post('/store-sound', [SoundController::class, 'storeSound']);
    Route::get('/get-sounds-by-category/{id}', [SoundController::class, 'getSoundsByCategory']);

    //user
    Route::post('/edit-profile', [UserController::class, 'editProfile']);
    Route::post('/edit-profile-image', [UserController::class, 'editProfileImage']);

    //notification
    Route::get('/send-not',[NotificationController::class,'pushNotification']);
});
