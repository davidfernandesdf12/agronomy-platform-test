<?php

use App\Http\Controllers\Admin\ReportsAdminController;
use App\Http\Controllers\Admin\VideoAdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('videos/', [VideoAdminController::class, 'index'])->name('admin.videos');
Route::post('videos/', [VideoAdminController::class, 'store'])->name('admin.videos.store');

Route::get('reports/', [ReportsAdminController::class, 'index'])->name('admin.reports');
Route::get('reports/create', [ReportsAdminController::class, 'create'])->name('admin.reports.create');
Route::post('reports/post', [ReportsAdminController::class, 'post'])->name('admin.reports.post');
Route::get('reports/pdf/{id_report}', [ReportsAdminController::class, 'getPDF'])->name('admin.reports.pdf');


Route::get('/login', function (){
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('auth');


