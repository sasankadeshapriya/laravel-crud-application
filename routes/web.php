<?php

use App\Http\Controllers\EmployeeController;
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
    return view('pages.home.home');
});

Route::post('/employee/save',[EmployeeController::class,'saveData'])->name('emp.save');
Route::get('/employee',[EmployeeController::class,'showData'])->name('emp.show');
Route::get('/employee/{emp_id}/edit',[EmployeeController::class,'editData'])->name('emp.edit');
Route::get('/employee/{emp_id}/delete',[EmployeeController::class,'deleteData'])->name('emp.delete');
Route::post('/employee/{emp_id}/update',[EmployeeController::class,'updateData'])->name('emp.update');
