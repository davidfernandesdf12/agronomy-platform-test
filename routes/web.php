<?php

use App\Http\Controllers\Admin\VideoAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

//Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('videos/', [VideoAdminController::class, 'index'])->name('admin.videos');
    Route::post('videos/', [VideoAdminController::class, 'store'])->name('admin.videos.store');
//});


Route::get('/login', function (){
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('auth');


