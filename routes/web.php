<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompetitieController;

Route::get('/competities', [CompetitieController::class, 'index'])->name('competities.index');
Route::get('/competities/create', [CompetitieController::class, 'create'])->name('competities.create');
Route::post('/competities', [CompetitieController::class, 'store'])->name('competities.store');
Route::get('/competities/{competitie}', [CompetitieController::class, 'show'])->name('competities.show');
Route::get('/competities/{competitie}/edit', [CompetitieController::class, 'edit'])->name('competities.edit');
Route::put('/competities/{competitie}', [CompetitieController::class, 'update'])->name('competities.update');
Route::delete('/competities/{competitie}', [CompetitieController::class, 'destroy'])->name('competities.destroy');
