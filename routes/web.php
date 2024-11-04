<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('login');
    
});

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Employees Route Are Here
Route::get('/add-employee', [EmployeeController::class, 'index'])->name('add.empolyee');
