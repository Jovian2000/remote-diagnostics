<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ShipController;
use App\Http\Controllers\EmissionController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get("/user", [UserController::class, "index"])->name('user.index');
Route::get("/user/create", [UserController::class, "create"])->name('user.create');
Route::post("/user/store", [UserController::class, "store"])->name('user.store');
Route::get("/user/destroy/{user}", [UserController::class, "destroy"])->name('user.destroy');

Route::get("/ship", [ShipController::class, "index"])->name('ship.index');
Route::get("/ship/create", [ShipController::class, "create"])->name('ship.create');
Route::post("/ship/store", [ShipController::class, "store"])->name('ship.store');
Route::get("/ship/destroy/{ship}", [ShipController::class, "destroy"])->name('ship.destroy');

Route::get("/emission", [EmissionController::class, "index"])->name('emission.index');
Route::get("/emission/create", [EmissionController::class, "create"])->name('emission.create');
Route::post("/emission/store", [EmissionController::class, "store"])->name('emission.store');
Route::get("/emission/destroy/{ship}", [EmissionController::class, "destroy"])->name('emission.destroy');