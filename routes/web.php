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

/*                 Prefix  Route   Function           */
Route::get('/test/',[Maincontroller::class,'test'])->name('test');
Route::get('/',[Maincontroller::class,'index'])->name('index');
Route::prefix('Admin')->name('Admin.')->group(function () {
    /*                        Admin Panel Controller                             */
    Route::get('/', [adminController::class, 'index2'])->name('index2');
    /*                      Admin Category Panel Controller                  */
    Route::prefix('Category')->name('Category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::get('/show/{id}', [CategoryController::class, 'show'])->name('show');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
    });
});
// Redirect function
Route::redirect('/trile','test');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
