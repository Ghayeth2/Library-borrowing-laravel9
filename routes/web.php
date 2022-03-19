<?php
namespace App\Http\Controllers;
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
Route::get('/test/',[Maincontroller::class,'test'])->name('test');
Route::get('/',[Maincontroller::class,'index'])->name('index');

// Redirect function
Route::redirect('/trile','test');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
