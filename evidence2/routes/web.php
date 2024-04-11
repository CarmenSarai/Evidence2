<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\FirstController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');




Route::get('/firsts', [FirstController::class, 'index'])->name('firsts.index');

Route::get('/users', [UserController::class, 'index'])->name('users.index');


