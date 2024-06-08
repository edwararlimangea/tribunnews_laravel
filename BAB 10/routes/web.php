<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\prosespolisiController;
use App\Models\prose_polisi;
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

Route::get('/', function () { return view('dashboard');});
Route::resource('proses', prosespolisiController::class);
Route::get('proses/view/pdf', [prosespolisiController::class, 'view_pdf']);