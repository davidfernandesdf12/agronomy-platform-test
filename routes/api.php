<?php

use App\Http\Controllers\API\ReportsController;
use App\Http\Controllers\API\VideoController;
use App\Http\Controllers\Auth\AuthController;
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

Route::post('login', [AuthController::class, 'login'])->name('api.login');

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('logout', [AuthController::class, 'logout']);
});

Route::group(['middleware' => ['jwt.auth']], function() {
        Route::resources([
            'videos' => VideoController::class,
        ]);
        Route::get('reports', [ReportsController::class, 'index']);

});




