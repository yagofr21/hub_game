<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetoFinalController;
use Illuminate\Support\Facades\Route;
 

Route::get('/', [ProjetoFinalController::class, 'homepage']);
Route::get('/cadastro', [ProjetoFinalController::class, 'cadastro'])->middleware('auth');
Route::get('/game/{id}', [ProjetoFinalController::class, 'show']);
Route::post('/game', [ProjetoFinalController::class, 'store']);
Route::delete('/game/{id}',[ProjetoFinalController::class,'destroy'])->middleware('auth');
Route::get('/game/edit/{id}', [ProjetoFinalController::class, 'edit'])->middleware('auth');
Route::put('/game/update/{id}', [ProjetoFinalController::class, 'update'])->middleware('auth');

Route::get('/dashboard', [ProjetoFinalController::class, 'dashboard'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
