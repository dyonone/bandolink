<?php

use App\Http\Controllers\CementingController;
use App\Http\Controllers\ShortsizeKaryawanController;
use App\Http\Controllers\ShortsizeBuildingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShortsizeAdminController;
use Illuminate\Support\Facades\Route;
use App\Models\Cementing;
use App\Models\ShortsizeKaryawan;
use Spatie\LaravelIgnition\Solutions\SolutionProviders\RouteNotDefinedSolutionProvider;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'welcome';
});

Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'authenticate']);

Route::get('shortsize/building', [ShortsizeBuildingController::class, 'index']);
Route::post('shortsize/building', [ShortsizeBuildingController::class, 'gantiCord']);

Route::get('shortsize/building/mandrel',[ShortsizeBuildingController::class, 'mandrel']);

Route::get('shortsize/admin/dashboard', [ShortsizeAdminController::class, 'index']);

Route::get('shortsize/admin/karyawan', [ShortsizeAdminController::class, 'karyawan']);

Route::post('shortsize/admin/karyawan', [ShortsizeAdminController::class, 'store']);

Route::delete('shortsize/admin/karyawan/{id}', [ShortsizeAdminController::class, 'destroy']);

Route::get('cementing', [CementingController::class, 'index']);

Route::post('cementing', [CementingController::class, 'store']);
Route::delete('cementing/{id}', [CementingController::class, 'destroy']);

Route::get('cementing/kanban', [CementingController::class, 'kanban']);

Route::get('tracing', function () {
    return view('tracing',[
        'title' => 'tracing'
    ]);
});

Route::get('test', function () {
    return view('test',[
        'title' => 'test'
    ]);
});