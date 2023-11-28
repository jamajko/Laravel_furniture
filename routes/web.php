<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home_f'])->name('home');

Route::get('/sklad', [App\Http\Controllers\SkladController::class, 'sklad_view'])->name('sklad');

Route::get('/export_material', [App\Http\Controllers\SkladController::class, 'export_material_f'])->name('export_material');

