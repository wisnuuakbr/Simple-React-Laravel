<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\HardwareController;

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('login');
    });

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    // // Rute yang hanya bisa diakses oleh superadmin
    // Route::middleware(['role:superadmin'])->group(function () {
    //     Route::resource('sensor', SensorController::class);
    //     // Tambahkan rute untuk CRUD hardware dan hardware detail
    //     // Route::resource('hardware', HardwareController::class);
    //     // Route::resource('hardware.details', HardwareDetailController::class)->except(['create', 'store']);
    // });

    // // Rute yang bisa diakses oleh admin
    // Route::middleware(['role:admin'])->group(function () {
    //     // Tambahkan rute untuk CRUD hardware dan hardware detail
    //     // Route::resource('hardware', HardwareController::class)->except(['destroy']);
    //     // Route::delete('/hardware/{hardware}/soft-delete', [HardwareController::class, 'softDelete'])->name('hardware.soft-delete');
    // });

    // // Rute yang bisa diakses oleh user
    // Route::middleware(['role:user'])->group(function () {
    //     // Rute untuk melihat daftar sensor
    //     // Route::get('/sensor', [SensorController::class, 'index'])->name('sensors.index');

    //     // Tambahkan rute untuk melihat detail hardware dan meng-update hardware detail
    //     // Route::resource('hardware', HardwareController::class)->only(['index', 'show']);
    //     // Route::resource('hardware.details', HardwareDetailController::class)->only(['index', 'update']);
    // });

    // Rute profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rute sensor
    Route::resource('sensor', SensorController::class);
    // Rute hardware
    Route::resource('hardware', HardwareController::class);
});

require __DIR__.'/auth.php';