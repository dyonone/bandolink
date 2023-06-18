<?php

use App\Http\Controllers\CementingController;
use App\Http\Controllers\ShortsizeKaryawanController;
use App\Http\Controllers\ShortsizeBuildingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShortsizeAdminController;
use App\Http\Controllers\TracingController;
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
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('shortsize/building', [ShortsizeBuildingController::class, 'index']);
Route::post('shortsize/building/store', [ShortsizeBuildingController::class, 'store'])->name('building');
Route::post('shortsize/building/ganticord', [ShortsizeBuildingController::class, 'gantiCord'])->name('gantiCord');

Route::get('shortsize/building/mandrel',[ShortsizeBuildingController::class, 'mandrel']);

Route::get('shortsize/admin/dashboard', [ShortsizeAdminController::class, 'index'])->middleware('role:admin');

Route::get('shortsize/admin/karyawan', [ShortsizeAdminController::class, 'karyawan']);
Route::post('shortsize/admin/karyawan', [ShortsizeAdminController::class, 'store']);

Route::delete('shortsize/admin/karyawan/{id}', [ShortsizeAdminController::class, 'destroy']);

Route::get('cementing', [CementingController::class, 'index']);

Route::post('cementing', [CementingController::class, 'store']);
Route::delete('cementing/{id}', [CementingController::class, 'destroy']);

Route::get('cementing/kanban', [CementingController::class, 'kanban']);

Route::get('tracing', [TracingController::class, 'index']);
Route::post('tracing', [TracingController::class, 'tracing'])->name('tracing');

Route::get('test', function () {
    return view('test',[
        'title' => 'test'
    ]);
});
Route::get('test2', function () {
    return view('test2',[
        'title' => 'test2'
    ]);
});

Route::get('barcode', function () {
    return view('barcode',[
        'title' => 'barcode'
    ]);
});