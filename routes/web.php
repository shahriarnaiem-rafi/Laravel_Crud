<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome')->name('home');
Route::get('/',[MyController::class,'view']);
Route::get('/add',[MyController::class,'add']);
Route::post('/add',[MyController::class,'adddata'])->name('add');
Route::delete('/delete/{id}',[MyController::class,'deletedata'])->name('delete');



Route::get('/edit/{id}',[MyController::class,'edit'])->name('edit');
Route::post('/edit',[MyController::class,'edited'])->name('edited');


