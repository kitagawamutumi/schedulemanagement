<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::group(['middleware' => ['auth']], function(){
    Route::get('/', [ScheduleController::class, 'index'])->name('index');
    Route::post('/schedules',  [ScheduleController::class, 'store'])->name('store');
    Route::get('/schedules/create',  [ScheduleController::class, 'create'])->name('store');
    Route::get('/schedules/{schedule}',  [ScheduleController::class, 'show'])->name('create');
    Route::put('/schedules/{schedule}',  [ScheduleController::class, 'update'])->name('show');
    Route::delete('/schedules/{schedule}',  [ScheduleController::class, 'delete'])->name('update');
    Route::get('/schedules/{schedule}/edit',  [ScheduleController::class, 'edit'])->name('edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
