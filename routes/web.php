<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjecteController;
use App\Http\Controllers\TascaController;

use App\Models\Projecte;
use App\Models\Tasca;
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
    return redirect()->route('projecte.index');
});

Route::resource('projecte', ProjecteController::class); 
Route::resource('projecte.tasca', TascaController::class);



