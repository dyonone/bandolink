<?php

use App\Http\Controllers\CementingController;
use App\Http\Controllers\ShortsizeKaryawanController;
use App\Http\Controllers\ShortsizeBuildingController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Models\Cementing;
use App\Models\ShortsizeKaryawan;

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

Route::get('test', function () {
    return view('test',[
        'title' => 'test'
    ]);
});

Route::get('login', [LoginController::class, 'authenticate']);

Route::get('shortsize/building',[ShortsizeBuildingController::class, 'index']);

Route::get('shortsize/building/mandrel', function () {
    return view('shortsize.building.mandrel',[
        'title' => 'Mandrel dan Pisau'
    ]);
});

Route::get('cementing', function () {
    return view('cementing.index',[
        'title' => 'Cementing',
        'cementings' => Cementing::all()
    ]);
});

Route::get('cementing/kanban', [CementingController::class, 'kanban']);

Route::get('shortsize/admin/dashboard', function () {
    return view('shortsize.admin.dashboard',[
        'title' => 'dashboard'
    ]);
});

Route::get('shortsize/admin/karyawan', function () {
    return view('shortsize.admin.karyawan',[
        'title' => 'karyawan',
        'karyawan' => ShortsizeKaryawan::all()
    ]);
});

Route::get('tracing', function () {
    return view('tracing',[
        'title' => 'tracing'
    ]);
});

// Route::post('/test', [TestController::class, 'test']);
Route::post('/cementing', [CementingController::class, 'store']);
Route::post('/shortsize/admin/karyawan', [ShortsizeKaryawanController::class, 'store']);

Route::delete('/cementing/{id}', [CementingController::class, 'destroy']);
Route::delete('/shortsize/admin/karyawan/{id}', [ShortsizeKaryawanController::class, 'destroy']);