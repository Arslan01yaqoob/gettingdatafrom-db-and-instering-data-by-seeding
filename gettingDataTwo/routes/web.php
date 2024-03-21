<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LawyerController;

Route::get('/', [LawyerController::class, 'givemelawyers']);

Route::get('/lawyer/{id}', [LawyerController::class, 'singlelawyer'])->name('view.user');



// Route::get('/', function () {
//     return view('welcome');
// });
