<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/users", [App\Http\Controllers\AdminController::class, "user"]);
Route::get("/deletemenu/{id}", [App\Http\Controllers\AdminController::class, "deletemenu"]);
Route::get("/updateview/{id}", [App\Http\Controllers\AdminController::class, "updateview"]);
Route::post("/update/{id}", [App\Http\Controllers\AdminController::class, "update"]);
Route::get("/foodmenu", [App\Http\Controllers\AdminController::class, "foodmenu"]);
Route::post("/uploadfood", [App\Http\Controllers\AdminController::class, "upload"]);
Route::get("/deleteuser/{id}", [App\Http\Controllers\AdminController::class, "deleteuser"]);
Route::get('redirects', [App\Http\Controllers\HomeController::class, 'redirects']);
Route::post("/reservation", [App\Http\Controllers\AdminController::class, "reservation"]);
Route::get('viewreservation', [App\Http\Controllers\AdminController::class, 'viewreservation']);
Route::post("/addcart/{id}", [App\Http\Controllers\HomeController::class, "addcart"]);
Route::get("/showcart/{id}", [App\Http\Controllers\HomeController::class, "showcart"]);
Route::get("/remove/{id}", [App\Http\Controllers\HomeController::class, "remove"]);
Route::post("/orderconfirm", [App\Http\Controllers\HomeController::class, "orderconfirm"]);
Route::get('orders', [App\Http\Controllers\AdminController::class, 'orders']);
Route::get('search', [App\Http\Controllers\AdminController::class, 'search']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
