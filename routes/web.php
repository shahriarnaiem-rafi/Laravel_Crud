<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

// Route::get("/",function (){
//     return view('welcome');
// });

Route::get("/", [MyController::class,'my_view']);
Route::get("/adddata", [MyController::class,'adddata']);
Route::post("/adddata", [MyController::class,'adddataPosted'])->name('adddata');
Route::delete("/delete/{id}", [MyController::class,'delete'])->name('delete');
