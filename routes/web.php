<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FedapayController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\VoteController;

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

Route::get('/', [CategoryController::class, 'index']);

Route::get('/candidats', function () {
    return view('candidates');
});

Route::get('/stats', function () {
    return view('statistics');
});

Route::resource('categories', CategoryController::class);
Route::resource('students', StudentController::class);
Route::resource('votes', VoteController::class);


Route::post('process', [FedapayController::class, 'process'])->name('fedapay.process');
Route::get('callback', [FedapayController::class, 'callback'])->name('fedapay.callback');
