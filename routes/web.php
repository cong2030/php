<?php
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;


Route::get('/tin', [TinController::class, 'index']);
Route::get('/tin/them', [TinController::class, 'create']);
Route::post('/tin/them', [TinController::class, 'store']);
Route::get('/tin/sua/{id}', [TinController::class, 'edit']);
Route::post('/tin/sua/{id}', [TinController::class, 'update']);
Route::get('/tin/xoa/{id}', [TinController::class, 'destroy']);