<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

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


Route::get('', function () {
    return redirect('calculator');
});

Route::get('calcul',function () {
    return redirect('calculator');
});

Route::post('calcul',[CalculatorController::class, 'DoCalculOperation'])->name('doCalcul');

Route::get('calculator',[CalculatorController::class, 'GetCalculatorForm']);






