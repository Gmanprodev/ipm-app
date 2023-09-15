<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AddressController;
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

// Route::get('/', HomeController::class)->name('signin');

// // Accounts
// Route::get('/signup', AccountController::class)->name('signup');



Route::get('/', [AuthController::class, 'show'])
    ->name('login');

Route::post('/login', [AuthController::class, 'authenticate'])
    ->name('authenticate');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');;

Route::middleware('auth')->group(function () {
    Route::get('/addresses', [AddressController::class, 'index'])
        ->name('addresses');;

    Route::get('/addresses/create', [AddressController::class, 'create'])
        ->name('addresses.create');

    Route::get('/addresses/{id}/view-address', [AddressController::class, 'viewAddress'])
        ->name('addresses.view.address');

    Route::post('/addresses/create', [AddressController::class, 'postCreate'])
        ->name('addresses.post.create');;

    Route::get('/addresses/{id}/edit', [AddressController::class, 'edit'])
        ->name('addresses.edit');

    Route::post('/addresses/{id}/edit', [AddressController::class, 'postEdit'])
        ->name('addresses.post.edit');

    Route::post('/addresses/{id}/delete', [AddressController::class, 'postDelete'])
        ->name('addresses.post.delete');
});


