<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Admin\AdminBookController;
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\imageController;
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



Route::get('/test/',[Maincontroller::class,'test'])->name('test');

Route::get('/book/{id}',[Maincontroller::class,'book'])->name('book');
Route::get('/categorybooks/{id}/{slug}',[Maincontroller::class,'categorybooks'])->name('categorybooks');
/*                 Home Pages Routes           */
Route::get('/',[Maincontroller::class,'index'])->name('home');
Route::get('/about',[Maincontroller::class,'about'])->name('about');
Route::get('/contact',[Maincontroller::class,'contact'])->name('contact');
Route::get('/references',[Maincontroller::class,'references'])->name('references');
/*                 Prefix  Route   Function           */
Route::prefix('Admin')->name('Admin.')->group(function () {
    /*                        Admin Panel Controller                             */
    Route::get('/', [adminController::class, 'index2'])->name('index2');
    /*                        General Admin Controller                             */
    Route::get('/settings', [adminController::class, 'settings'])->name('settings');
    Route::get('/settingsupdate', [adminController::class, 'settingsupdate'])->name('settings.update');
    /*                      Admin Category Panel Controller                  */
    Route::prefix('Category')->name('Category.')->controller(CategoryController::class)->group(function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::post('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/','index' )->name('index');

    });
    /*                      Admin Book Panel Controller                  */
    Route::prefix('book')->name('book.')->controller(AdminBookController::class)->group(function () {
        Route::get('/create',  'create')->name('create');
        Route::post('/store',  'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/', 'index')->name('index');

    });
    /*                      Admin Image Panel Controller                  */
    Route::prefix('image')->name('image.')->controller(imageController::class)->group(function () {
        Route::post('/store/{bid}',  'store')->name('store');
        /* the presedence is important as C language when sending variables to any Function */
        Route::post('/update/{bid}/{id}', 'update')->name('update');
        Route::get('/destroy/{bid}/{id}', 'destroy')->name('destroy');
        /* the presedence is important as C language when sending variables to any Function */
        Route::get('/{bid}', 'index')->name('index');

    });
});
// Redirect function
Route::redirect('/tirle','test');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
