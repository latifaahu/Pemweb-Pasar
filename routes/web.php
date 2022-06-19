<?php

use App\Http\Controllers\PasarController;
use App\Http\Controllers\TenantController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pasar', [PasarController::class, 'index']);
Route::post('/pasar', [PasarController::class, 'store']);
Route::get('/pasar/create', [PasarController::class, 'create']);
Route::get('/pasar/{pasar}/edit', [PasarController::class, 'edit']);
Route::put('/pasar/{pasar}', [PasarController::class, 'update']);
Route::get('/pasar/{pasar}/delete', [PasarController::class, 'destroy']);

Route::get('/tenant', [TenantController::class, 'index']);
Route::post('/tenant', [TenantController::class, 'store']);
Route::get('/tenant/create', [TenantController::class, 'create']);
Route::get('/tenant/{tenant}/edit', [TenantController::class, 'edit']);
Route::put('/tenant/{tenant}', [TenantController::class, 'update']);
Route::get('/tenant/{tenant}/delete', [TenantController::class, 'destroy']);

Route::get('/modals', function () {
   return view('modals', [
    "active" => ""
   ]);
});

