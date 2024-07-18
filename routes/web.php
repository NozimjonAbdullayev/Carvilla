<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('/');

Route::get('create', [CarsController::class, 'create'])->name('create');
Route::post('create', [CarsController::class, 'store'])->name('store');   
Route::get('cars/{cars}/edit', [CarsController::class, 'edit'])->name('edit');
Route::put('cars/{cars}/edit',[CarsController:: class,'update'])->name('update');
Route::delete('cars/{cars}/delete',[CarsController::class, 'delete'])->name('cars.delete');



Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');