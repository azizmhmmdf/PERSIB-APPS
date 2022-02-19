<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DatapenggunaController;
use App\Http\Controllers\Backend\RekapulasiController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\DatasetController;
use App\Http\Controllers\Backend\PredictionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\GbController;
use App\Http\Controllers\User\DoController;
use App\Http\Controllers\User\KmeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false,
    'reset' => false
]);

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::prefix('kuisoner')->group(function(){
        Route::get('/gayabelajar', [GbController::class, 'index'])->name('kuisoner.gb');
        Route::post('/gayabelajar', [GbController::class, 'gayabelajar'])->name('gaya.belajar');
        Route::get('/dominasiotak', [DoController::class, 'index'])->name('kuisoner.do');
        Route::post('/dominasiotak', [DoController::class, 'dominasiotak'])->name('dominasi.otak');
        Route::get('/kesehatanmental', [KmeController::class, 'index'])->name('kuisoner.kme');
        Route::post('/kesehatanmental', [KmeController::class, 'kesehatanmental'])->name('kesehatan.mental');
    });
    Route::prefix('panel/admin')->group(function(){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('panel.admin.dashboard');
        Route::prefix('userData')->group(function(){
            Route::get('/listAccounStudent', [DatapenggunaController::class, 'listAccountStudent'])->name('panel.admin.list');
            Route::get('/addAccounStudent', [DatapenggunaController::class, 'addAccountStudent'])->name('panel.admin.addAccountStudent');
            Route::post('/addAccounStudent', [DatapenggunaController::class, 'postAddAccountStudent'])->name('panel.admin.post.addAccountStudent');
            Route::get('/AccountStudent/{id}', [DatapenggunaController::class, 'editAccountStudent'])->name('panel.admin.editAccountStudent');
            Route::patch('/AccounStudent/{id}', [DatapenggunaController::class, 'updateAccountStudent'])->name('panel.admin.updateAccountStudent');
            Route::delete('/deleteAccounStudent/{id}', [DatapenggunaController::class, 'deleteAccountStudent'])->name('panel.admin.deleteAccountStudent');
        });
        Route::prefix('recap')->group(function(){
            Route::get('/answer', [RekapulasiController::class, 'index'])->name('panel.admin.recap.index');
        });

        Route::prefix('student')->group(function(){
            Route::get('/', [DatapenggunaController::class, 'getImportSiswa'])->name('panel.admin.list.student');
            Route::post('/import', [DatapenggunaController::class, 'importSiswa'])->name('post.student');
        });

        Route::prefix('report')->group(function(){
            Route::get('/', [ReportController::class, 'index'])->name('panel.admin.report');
            Route::get('/show-rapot/{user_id}', [ReportController::class, 'showRapot'])->name('panel.admin.show.report');
            Route::get('/cetak/{user_id}', [ReportController::class, 'cetakRapot'])->name('panel.admin.cetak');
        });

        Route::prefix('dataset')->group(function(){
            Route::get('/', [DatasetController::class, 'getDataset'])->name('panel.admin.dataset');
            Route::get('/result-prediction', [DatasetController::class, 'index'])->name('panel.admin.prediction');
            Route::post('/import-dataset', [DatasetController::class, 'importExcel'])->name('panel.admin.import');
        });

        Route::prefix('prediction')->group(function(){
            Route::get('/{user_id}', [PredictionController::class, 'index'])->name('panel.admin.index');
        });

    });
});

