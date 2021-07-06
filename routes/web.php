<?php

use App\Http\Controllers\CreateUserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\ProofAdminController;
use App\Http\Controllers\ProofController;
use App\Http\Controllers\SubPoinController;
use App\Http\Controllers\UserController;


//halaman user
Route::middleware(['auth', 'user'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user'); //halaman awal user

        //halaman bukti
        Route::prefix('proof')->name('proof.')->group(function () {
            Route::get('{poin:id}', [ProofController::class, 'index'])->name('index');
            Route::get('create/{subpoin:id}', [ProofController::class, 'create'])->name('create');
            Route::post('create/{subpoin:id}', [ProofController::class, 'store']);
            Route::get('show/{subpoin:id}', [ProofController::class, 'show'])->name('show');
            Route::get('edit/{subpoin:id}', [ProofController::class, 'edit'])->name('edit');
            Route::put('edit/{proof:id}', [ProofController::class, 'update']);
            Route::get('delete/{proof:id}', [ProofController::class, 'destroy'])->name('destroy');
        });
    });
});


//halaman admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin'); //halaman awal admin

    //halaman poin
    Route::prefix('poin')->name('poin.')->group(function () {
        Route::get('create', [PoinController::class, 'create'])->name('create');
        Route::post('create', [PoinController::class, 'store']);
        Route::get('edit/{poin:slug}', [PoinController::class, 'edit'])->name('edit');
        Route::put('edit/{poin:slug}', [PoinController::class, 'update']);
        Route::get('detail/{poin:slug}', [PoinController::class, 'show'])->name('show');
        Route::get('{poin:slug}', [PoinController::class, 'destroy'])->name('destroy');
    });

    //halaman sub poin
    Route::prefix('SubPoin')->name('subPoin.')->group(function () {
        Route::get('create', [SubPoinController::class, 'create'])->name('create');
        Route::post('create', [SubPoinController::class, 'store']);
        Route::get('edit/{subPoin:slug}', [SubPoinController::class, 'edit'])->name('edit');
        Route::put('edit/{subPoin:slug}', [SubPoinController::class, 'update']);
        Route::get('{subPoin:slug}', [SubPoinController::class, 'destroy'])->name('destroy');
    });

    //halaman bukti
    Route::prefix('Proof')->name('proofAdmin.')->group(function () {
        Route::get('/', [ProofAdminController::class, 'index'])->name('index');
        Route::get('{user:id}', [ProofAdminController::class, 'show'])->name('show');
        Route::get('edit/{proof:id}', [ProofAdminController::class, 'edit'])->name('edit');
        Route::put('edit/{proof:id}', [ProofAdminController::class, 'update'])->name('edit');
    });

    //halaman user
    Route::prefix('User')->name('createUser.')->group(function () {
        Route::get('create', [CreateUserController::class, 'create'])->name('create');
        Route::post('create', [CreateUserController::class, 'store']);
    });
});
Auth::routes();
