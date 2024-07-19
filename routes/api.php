<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ExerciseController;
use App\Http\Controllers\Api\ForgetPasswordController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\SoundController;
use App\Http\Controllers\Api\SubscriptionController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
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
Route::post('social-login', [AuthController::class, 'socialLogin']);
// Route::post('auth/facebook/callback', [AuthController::class, 'loginWithFacebook']);

Route::post('/send-reset-token',[ForgetPasswordController::class,'sendResetToken']);
Route::post('/reset-password',[ForgetPasswordController::class,'resetPassword']);

Route::post('store-receipt', [SubscriptionController::class,'storeReceipt']);
Route::post('cancel-subscription', [SubscriptionController::class,'cancelSubscription']);
//exercise
Route::post('store-exercise', [ExerciseController::class,'storeExercise']);
Route::get('get-exercises', [ExerciseController::class,'getExercise']);

Route::get('get-product-ids', [SubscriptionController::class,'getProductId']);

//sound
Route::post('/store-sound', [SoundController::class, 'storeSound']);




Route::middleware('auth:api')->group( function () {


    Route::get('/get-sounds-by-category/{id}', [SoundController::class, 'getSoundsByCategory']);
    Route::get('/get-sound-by-id/{id}', [SoundController::class, 'getSoundById']);
    Route::get('/delete-sound/{id}', [SoundController::class, 'deleteSound']);

    //user
    Route::get('/get-user', [UserController::class, 'getUser']);
    Route::post('/edit-profile', [UserController::class, 'editProfile']);
    Route::post('/edit-profile-image', [UserController::class, 'editProfileImage']);
    Route::get('/delete-account', [UserController::class, 'deleteAccount']);
    Route::post('/update-password', [UserController::class, 'updatePassword']);

    //notification
    Route::get('/send-not',[NotificationController::class,'pushNotification']);
    Route::get('/get-notifications', [NotificationController::class, 'getNotifications'])->name('get-notifications');

    //logout
    Route::get('logout', [AuthController::class, 'logout']);

});

Route::post('/send-notification', [NotificationController::class, 'sendPushNotification']);