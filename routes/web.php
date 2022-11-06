<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnjunganController;
use App\Http\Controllers\PerizinanController;

use App\Http\Controllers\FO2\Anjungan2Controller;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AnjunganController::class, 'index'])->name('anjungan.index');
Route::get('/layanan-perizinan', [PerizinanController::class, 'index'])->name('perizinan.index');

// Route::get('/', [Anjungan2Controller::class, 'index'])->name('anjungan.index');

