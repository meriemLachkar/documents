<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/documents/search",[CRUDController::class,"search"])->name("documents.search");
Route::post("/documents/find",[CRUDController::class,"find"])->name('documents.find');
Route::get("/documents/filtrage",[CRUDController::class,"filtrage"])->name('documents.filtrage');
Route::get("/open/{id}",[CRUDController::class,"open"])->name('documents.open');

Route::resource('documents', CRUDController::class);
