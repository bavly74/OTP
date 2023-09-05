<?php

use App\Http\Controllers\TwoFactorController;
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
    return view('welcome');
});

 Route::get('verify',[TwoFactorController::class,'index'])->name('verify.index');
 Route::post('verify/store',[TwoFactorController::class,'store'])->name('verify.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','two_factor'])->name('dashboard');

require __DIR__.'/auth.php';
