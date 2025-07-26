<?php

use App\Livewire\PegawaiComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\RuanganComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/ruangan', RuanganComponent::class)->name('ruangan');
Route::get('/pengguna', PegawaiComponent::class)->name('pengguna');