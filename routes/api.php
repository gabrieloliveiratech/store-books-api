<?php

use App\Domain\Http\Controllers\Auth\AuthController;
use App\Domain\Http\Controllers\Book\BookController;
use App\Domain\Http\Controllers\Store\StoreController;
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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth',

], function ($router) {

    Route::post('login', AuthController::class.'@login');
    Route::post('signup', AuthController::class.'@signup');
    Route::post('logout', AuthController::class.'@logout');
    Route::post('refresh', AuthController::class.'@refresh');
    Route::post('me', AuthController::class.'@me');

});

Route::group(['middleware' => 'auth:api'], function () {
    Route::apiResource('books', BookController::class);
    Route::apiResource('stores', StoreController::class);
    Route::post('/stores/{storeId}/books/{bookId}', StoreController::class.'@addBook');
    Route::delete('/stores/{storeId}/books/{bookId}', StoreController::class.'@removeBook');
});
