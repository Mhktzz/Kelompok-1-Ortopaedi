<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\Icd10Controller;

Route::get('/', function () {
    return view('landingpage');
})->name('landing');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'role:super_admin'])->group(function () {

    Route::get('/dashboard/superadmin', function () {
        return view('dashboard.superadmin.dashboard');
    })->name('dashboard.superadmin');


    Route::get(
        '/dashboard/superadmin/kelola-user',
        [UserController::class, 'kelolauser']
    )->name('dashboard.superadmin.kelolauser');

    Route::get(
        '/dashboard/superadmin/user/create',
        [UserController::class, 'create']
    )->name('dashboard.superadmin.user.create');

    Route::post(
        '/dashboard/superadmin/user',
        [UserController::class, 'store']
    )->name('dashboard.superadmin.user.store');

    Route::get(
        '/dashboard/superadmin/user/{user}',
        [UserController::class, 'show']
    )->name('dashboard.superadmin.user.show');

    Route::get(
        '/dashboard/superadmin/user/{user}/edit',
        [UserController::class, 'edit']
    )->name('dashboard.superadmin.user.edit');

    Route::put(
        '/dashboard/superadmin/user/{user}',
        [UserController::class, 'update']
    )->name('dashboard.superadmin.user.update');

    Route::delete(
        '/dashboard/superadmin/user/{user}',
        [UserController::class, 'destroy']
    )->name('dashboard.superadmin.user.destroy');


    Route::get('/dashboard/superadmin/rekam-medis', function () {
        return view('dashboard.superadmin.rekammedis');
    })->name('dashboard.superadmin.rekammedis');

    Route::get('/dashboard/superadmin/data-pasien', function () {
        return view('dashboard.superadmin.datapasien');
    })->name('dashboard.superadmin.datapasien');


    Route::get(
        '/dashboard/superadmin/obat',
        [MedicineController::class, 'index']
    )->name('superadmin.obat.index');

    Route::get(
        '/dashboard/superadmin/obat/create',
        [MedicineController::class, 'create']
    )->name('superadmin.obat.create');

    Route::post(
        '/dashboard/superadmin/obat',
        [MedicineController::class, 'store']
    )->name('superadmin.obat.store');

    Route::get(
        '/dashboard/superadmin/obat/{medicine}/edit',
        [MedicineController::class, 'edit']
    )->name('superadmin.obat.edit');

    Route::put(
        '/dashboard/superadmin/obat/{medicine}',
        [MedicineController::class, 'update']
    )->name('superadmin.obat.update');

    Route::delete(
        '/dashboard/superadmin/obat/{medicine}',
        [MedicineController::class, 'destroy']
    )->name('superadmin.obat.destroy');


    Route::get(
        '/dashboard/superadmin/master-icd10',
        [Icd10Controller::class, 'index']
    )->name('dashboard.superadmin.icd10.index');

    Route::get(
        '/dashboard/superadmin/master-icd10/create',
        [Icd10Controller::class, 'create']
    )->name('dashboard.superadmin.icd10.create');

    Route::post(
        '/dashboard/superadmin/master-icd10',
        [Icd10Controller::class, 'store']
    )->name('dashboard.superadmin.icd10.store');

    Route::get(
        '/dashboard/superadmin/master-icd10/{icd10}',
        [Icd10Controller::class, 'show']
    )->name('dashboard.superadmin.icd10.show');

    Route::get(
        '/dashboard/superadmin/master-icd10/{icd10}/edit',
        [Icd10Controller::class, 'edit']
    )->name('dashboard.superadmin.icd10.edit');

    Route::put(
        '/dashboard/superadmin/master-icd10/{icd10}',
        [Icd10Controller::class, 'update']
    )->name('dashboard.superadmin.icd10.update');

    Route::delete(
        '/dashboard/superadmin/master-icd10/{icd10}',
        [Icd10Controller::class, 'destroy']
    )->name('dashboard.superadmin.icd10.destroy');
});


Route::middleware(['auth', 'role:manajer'])->group(function () {
    Route::get('/dashboard/manajer', function () {
        return view('dashboard.manajer.index');
    })->name('dashboard.manajer');
});

Route::middleware(['auth', 'role:pendaftaran'])->group(function () {
    Route::get('/dashboard/pendaftaran', function () {
        return view('dashboard.pendaftaran.index');
    })->name('dashboard.pendaftaran');
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
