<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
Route::get('/', function () {
    return view('home');
    return view('app');
});
Route::get('/animals', [AnimalController::class,'index'])->name('pages.index');
Route::get('/animals/{animal}', [AnimalController::class,'show'])->name('pages.show');
Route::get('/animals/create', [AnimalController::class,'create'])->name('pages.create');
