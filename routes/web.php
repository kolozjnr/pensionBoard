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

Route::group(['middleware' => ['auth']], function(){
    
Route::get('dashboard', [UnivController::class, 'dashboard'])
->name('dashboard');
Route::resource('staffs',StaffController::class);
Route::post('search', [UnivController::class, 'search'])->name('Search');
Route::get('search', [UnivController::class, 'search'])->name('Search');
Route::get('pension', [UnivController::class, 'pension'])->name('pension');
Route::post('pension', [UnivController::class, 'pension'])->name('pension');
Route::get('getEmployeeDetails/{empid}', [UnivController::class, 'getEmployeeDetails'])->name('getEmployeeDetails');
});

require __DIR__.'/auth.php';
