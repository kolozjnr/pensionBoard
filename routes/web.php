<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnivController;
use App\Http\Controllers\StaffController;

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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})*/
Route::get('/', [UnivController::class, 'index'])->name('Home');
Route::get('dashboard', [UnivController::class, 'dashboard'])
->middleware(['auth'])->name('dashboard');
Route::resource('staffs',StaffController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
