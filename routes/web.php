<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get/post("url",[controllerClass,'Method']);


Route::get("/",[StudentController::class,'index'])->name('view.student');
Route::get("/add",[StudentController::class,'create'])->name('add.student');
Route::post("/store",[StudentController::class,'store'])->name('store.student');
Route::get("/edit/{id}",[StudentController::class,'edit'])->name('edit.student');
Route::get("/show/{id}",[StudentController::class,'show'])->name('show.student');
Route::post("/update/{id}",[StudentController::class,'update'])->name('update.student');
Route::get("/delete/{id}",[StudentController::class,'destroy'])->name('delete.student');
