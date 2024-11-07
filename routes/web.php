<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\AdvanceSalaerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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
Route::get('/add-customer', [CustomerController::class, 'index'])->name('add.customer');
Route::post('/insert-customer', [CustomerController::class, 'store'])->name('insert.customer');
Route::get('/all-customer', [CustomerController::class, 'allCustomer'])->name('all.customer');

//Supplier Route Are Here
Route::get('/add-supplier', [SupplierController::class, 'index'])->name('add.supplier');
Route::post('/insert-supplier', [SupplierController::class, 'store'])->name('insert.supplier');
Route::get('/all-supplier', [SupplierController::class, 'allSupplier'])->name('all.supplier');

//Supplier Route Are Here
Route::get('/add-salary', [SalaryController::class, 'index'])->name('add.salary');
Route::post('/insert-salary', [SalaryController::class, 'store'])->name('insert.salary');
// Route::get('/all-salary', [SalaryController::class, 'allSalary'])->name('all.salary');

//Supplier Route Are Here
Route::get('/add-advance-salary', [AdvanceSalaerController::class, 'index'])->name('add.advance.salary');
Route::post('/insert-advance-salary', [AdvanceSalaerController::class, 'store'])->name('insert.advance.salary');
Route::get('/all-advance-salary', [AdvanceSalaerController::class, 'allSalary'])->name('all.salary');
Route::get('/pay-salary', [AdvanceSalaerController::class, 'PaySalary'])->name('pay.salary');


//Category Route Are Here
Route::get('/add-category', [CategoryController::class, 'index'])->name('add.category');
Route::post('/insert-category', [CategoryController::class, 'store'])->name('insert.category');
Route::get('/all-Category', [CategoryController::class, 'allCategory'])->name('all.category');


//Category Route Are Here
Route::get('/add-product', [ProductController::class, 'index'])->name('add.product');
Route::post('/insert-product', [ProductController::class, 'store'])->name('insert.product');
Route::get('/all-product', [ProductController::class, 'allProduct'])->name('all.product');
