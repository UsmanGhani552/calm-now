<?php

use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SoundController;
use App\Http\Controllers\SoundInstructionController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;
use App\Models\Exercise;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::view('/reset','emails.forget_password');
Route::middleware(['auth'])->group(function () {
    // Route::view('/dashboard', 'admin.dashboard.index')->name('admin.dashboard');
    Route::get('/logout', [HomeController::class, 'destroy'])->name('logout');

    Route::view('/customer', 'admin.customer.index')->name('customers');
    Route::view('/customer/create', 'admin.customer.create')->name('customer.create');

    Route::controller(UserController::class)->prefix('users')->name('users.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{user}', 'edit')->name('edit');
        Route::post('/update/{user}', 'update')->name('update');
        Route::get('/destroy/{user}', 'delete')->name('delete');
    });
    Route::controller(ExerciseController::class)->prefix('exercise')->name('exercise.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{exercise}', 'edit')->name('edit');
        Route::post('/update/{exercise}', 'update')->name('update');
        Route::get('/destroy/{exercise}', 'delete')->name('delete');
    });
    Route::controller(SoundController::class)->prefix('sound')->name('sound.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{sound}', 'edit')->name('edit');
        Route::post('/update/{sound}', 'update')->name('update');
        Route::get('/destroy/{sound}', 'delete')->name('delete');
    });
    Route::controller(SoundInstructionController::class)->prefix('sound-instruction')->name('sound-instruction.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{soundInstruction}', 'edit')->name('edit');
        Route::post('/update/{soundInstruction}', 'update')->name('update');
        Route::get('/destroy/{soundInstruction}', 'delete')->name('delete');
    });
    Route::controller(SubscriptionController::class)->prefix('subscription-product')->name('subscription-product.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{subscriptionProduct}', 'edit')->name('edit');
        Route::post('/update/{subscriptionProduct}', 'update')->name('update');
        Route::get('/destroy/{subscriptionProduct}', 'delete')->name('delete');
    });
    

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
