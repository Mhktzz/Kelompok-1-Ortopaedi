<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\reservationController;
use App\Http\Controllers\PatientController;
/* LANDING */

Route::get('/', function () {
    return view('landingpage');
})->name('landing');

/* AUTH */
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/* DASHBOARD */
Route::middleware(['auth', 'role:super_admin'])->group(function () {
    Route::get('/dashboard/superadmin', function () {
        return view('dashboard.superadmin.dashboard');
    })->name('dashboard.superadmin');

    Route::get('/dashboard/superadmin/kelola-user', function () {
        return view('dashboard.superadmin.kelolauser');
    })->name('dashboard.superadmin.kelolauser');
});

Route::middleware(['auth', 'role:manajer'])->group(function () {
    Route::get('/dashboard/manajer', function () {
        return view('dashboard.manajer.index');
    })->name('dashboard.manajer');
});

Route::middleware(['auth', 'role:pendaftaran'])->group(function () {

       // INDEX
    Route::get(
        '/dashboard/pendaftaran/reservasi/index',
        [ReservationController::class, 'index']
    )->name('dashboard.pendaftaran.reservasi.index');

    // CREATE
    Route::get(
        '/dashboard/pendaftaran/reservasi/create',
        [ReservationController::class, 'create']
    )->name('dashboard.pendaftaran.reservasi.create');

    // STORE
    Route::post(
        '/dashboard/pendaftaran/reservasi/store',
        [ReservationController::class, 'store']
    )->name('dashboard.pendaftaran.reservasi.store');

    // SHOW (VIEW)
    Route::get(
        '/dashboard/pendaftaran/reservasi/{reservasi}',
        [ReservationController::class, 'show']
    )->name('dashboard.pendaftaran.reservasi.view');

    // EDIT
    Route::get(
        '/dashboard/pendaftaran/reservasi/{reservasi}/edit',
        [ReservationController::class, 'edit']
    )->name('dashboard.pendaftaran.reservasi.edit');

    // UPDATE
    Route::put(
        '/dashboard/pendaftaran/reservasi/{reservasi}',
        [ReservationController::class, 'update']
    )->name('dashboard.pendaftaran.reservasi.update');

    // DELETE
    Route::delete(
        '/dashboard/pendaftaran/reservasi/{reservasi}',
        [ReservationController::class, 'destroy']
    )->name('dashboard.pendaftaran.reservasi.destroy');

        Route::get('/patient', [PatientController::class, 'index'])
            ->name('dashboard.pendaftaran.patient');

});


Route::middleware(['auth', 'role:perawat'])->group(function () {
    Route::get('/dashboard/perawat', function () {
        return view('dashboard.perawat.index');
    })->name('dashboard.perawat');
});

Route::middleware(['auth', 'role:dokter'])->group(function () {
    Route::get('/dashboard/dokter', function () {
        return view('dashboard.dokter.index');
    })->name('dashboard.dokter');
});

Route::middleware(['auth', 'role:apoteker'])->group(function () {
    Route::get('/dashboard/apoteker', function () {
        return view('dashboard.apoteker.index');
    })->name('dashboard.apoteker');
});
