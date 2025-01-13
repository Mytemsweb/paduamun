<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InitController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CommitteeController;

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

Route::get('/', [InitController::class, 'index'])->name('init');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('about_us');

Route::controller(CommitteeController::class)->prefix('committees')->group(function() {
    Route::get('/'                    , 'index')->name('committees');
    Route::post('/get-committee'      , 'get_committ')->name('get_committee');
});