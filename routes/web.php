<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('login');
    
});

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Employees Route Are Here
Route::get('/add-employee', [EmployeeController::class, 'index'])->name('add.empolyee');
Route::post('/insert-employee', [EmployeeController::class, 'store'])->name('insert.empolyee');
Route::get('/all-employee', [EmployeeController::class, 'allEmployees'])->name('all.empolyee');


//Customer
//Employees Route Are Here
Route::get('/add-customer', [CustomerController::class, 'index'])->name('add.customer');
Route::post('/insert-customer', [CustomerController::class, 'store'])->name('insert.customer');
Route::get('/all-customer', [CustomerController::class, 'allCustomer'])->name('all.customer');

