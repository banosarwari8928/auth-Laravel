<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix("/customer")->controller(CustomerController::class)->group(function(){
    Route::get("/",'index');
    Route::view("create","Customer.insert");
    Route::post("/upload","add");
});
Route::prefix("pro")->controller(ProductController::class)->group(function(){
    Route::get("/","landing");
      Route::get("addPro","showForm");
      Route::post("create","create");
});


require __DIR__.'/auth.php';
