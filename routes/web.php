<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RacksController;
use App\Http\Controllers\StatusesController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\WarehousesController;
use App\Http\Controllers\ItemsController;

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
    return view('welcome', ['title' => 'Progate Inventory']);
});

// Route::get('/tambah_suplier', function () {
//     return view('input.suplier', [
//         'title' => 'Tambah Suplier'
//     ]);
// });

// Route::post('/save_suplier', function () {
//     return view('welcome', ['tes' => 'arip budiman']);
// });

Route::resource('supplier', SuppliersController::class);
Route::resource('warehouse', WarehousesController::class);
Route::resource('rack', RacksController::class);
Route::resource('status',StatusesController::class);
Route::resource('item',ItemsController::class);
