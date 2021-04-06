<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todolistController;
use App\Http\Controllers\CheckoutController;

Route::get('/todo/{listid}',[todolistController::class,'index'])->name('todolist');
Route::post('/todoadd',[todolistController::class,'add'])->name('addtask');
Route::get('/deletetodo/{id}',[todolistController::class,'delete'])->name('deletetask');

Route::get('/', function () {
    return view('home');
});
Route::get('/todos', function () {
    return view('todos');
});


