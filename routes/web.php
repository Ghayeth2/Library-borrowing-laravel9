<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Printout message from Route
Route::get('/hello', function () {
    return "Welcome to the new ceated project";
});
// Call views without controller
Route::view('/welcome','welcome');

// Using Maincontroller function
Route::get('/admin',[adminController::class,'index2'])->name('index2');

Route::get('/test/',[Maincontroller::class,'test'])->name('test');
Route::get('/',[Maincontroller::class,'index'])->name('index');
Route::get('/admin/category',[CategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create',[CategoryController::class,'create'])->name('admin_category_create');

Route::post('/Admin/Category/store',[CategoryController::class,'store'])->name('admin_category_store');

// Redirect function
Route::redirect('/trile','test');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
