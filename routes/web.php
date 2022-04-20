<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Admin\AdminBookController;
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

// Using Maincontroller function

/*                 Prefix  Route   Function           */
Route::get('/test/',[Maincontroller::class,'test'])->name('test');
Route::get('/',[Maincontroller::class,'index'])->name('index');


Route::prefix('Admin')->name('Admin.')->group(function () {
    /*                        Admin Panel Controller                             */
    Route::get('/', [adminController::class, 'index2'])->name('index2');
    /*                      Admin Category Panel Controller                  */
    Route::prefix('Category')->name('Category.')->controller(CategoryController::class)->group(function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/','index' )->name('index');

    });
    /*                      Admin Book Panel Controller                  */
    Route::prefix('book')->name('book.')->controller(AdminBookController::class)->group(function () {
        Route::get('/create',  'create')->name('create');
        Route::post('/store',  'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::post('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/', 'index')->name('index');

    });
});
// Redirect function
Route::redirect('/tirle','test');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
