<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Admin\AdminBookController;
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentsController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\imageController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\UsersController;
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



Route::get('/book/{id}',[Maincontroller::class,'book'])->name('book');
Route::get('/borrowmain/{id}',[BorrowMainController::class,'borrowmain'])->name('borrowmain');
Route::get('/borrowindex',[BorrowMainController::class,'borrowindex'])->name('borrowindex');
Route::post('/storeborrowbook',[BorrowMainController::class,'storeborrowbook'])->name('storeborrowbook');
Route::get('/destroyborrowbook/{id}',[BorrowMainController::class,'destroyborrowbook'])->name('destroyborrowbook');
Route::get('/categorybooks/{id}/{slug}',[Maincontroller::class,'categorybooks'])->name('categorybooks');


/*                 Home Pages Routes           */
Route::get('/',[Maincontroller::class,'index'])->name('home');
Route::get('/about',[Maincontroller::class,'about'])->name('about');
Route::get('/contact',[Maincontroller::class,'contact'])->name('contact');
Route::get('/references',[Maincontroller::class,'references'])->name('references');
Route::get('/faq',[Maincontroller::class,'faq'])->name('faq');
Route::post('/savecomment',[Maincontroller::class,'savecomment'])->name('savecomment');
Route::post('/savemessage',[Maincontroller::class,'savemessage'])->name('savemessage');

Route::post('/adminlogincheck',[Maincontroller::class,'adminlogincheck'])->name('adminlogincheck');
Route::view('/adminlogin','Admin.login')->name('adminlogin');
Route::view('/userlogin','homeTrails.logIn')->name('userlogin');;
Route::view('/adminprofile','Admin.profile')->name('adminprofile');;
Route::view('/userregister','homeTrails.register')->name('userregister');;
Route::get('/userlogout',[Maincontroller::class,'logout'])->name('userlogout');


Route::middleware('auth')->group(function () {


    /*    **********    USER ADMIN PANEL ROUTES   ************  */
    Route::prefix('/userPanel')->name('userPanel.')->controller(UserAdminController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/reviews','reviews')->name('reviews');
        Route::post('/reviewdestroy/{id}', 'reviewdestroy')->name('reviewdestroy');
        Route::get('/books','books')->name('books');
        Route::post('/booksdestroy/{id}', 'booksdestroy')->name('booksdestroy');

    });















    /*                 Prefix  Route   Function           */
    Route::middleware('Admin')->prefix('/Admin')->name('Admin.')->group(function () {
        /*                        Admin Panel Controller                             */
        Route::get('/', [adminController::class, 'index2'])->name('index2');
        //***** General Routes routes ****
        Route::get('/setting', [adminController::class,'setting'])->name('setting');
        Route::post('/setting', [adminController::class,'settingUpdate'])->name('setting.update');


        /*                      Admin Category Panel Controller                  */
        Route::prefix('/Category')->name('Category.')->controller(CategoryController::class)->group(function () {
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/','index' )->name('index');

        });


        /*                      Admin Book Panel Controller                  */
        Route::prefix('/book')->name('book.')->controller(AdminBookController::class)->group(function () {
            Route::get('/create',  'create')->name('create');
            Route::post('/store',  'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/', 'index')->name('index');

        });

        /*                      ADMIN BORROW TABLE ROUTES                  */
        Route::prefix('/borrowm')->name('borrowm.')->controller(AdminBorrowControler::class)->group(function () {
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/index','index' )->name('index');

        });


        /*                      Admin Image Panel Controller                  */
        Route::prefix('/image')->name('image.')->controller(imageController::class)->group(function () {
            Route::post('/store/{bid}',  'store')->name('store');
            /* the presedence is important as C language when sending variables to any Function */
            Route::post('/update/{bid}/{id}', 'update')->name('update');
            Route::get('/destroy/{bid}/{id}', 'destroy')->name('destroy');
            /* the presedence is important as C language when sending variables to any Function */
            Route::get('/{bid}', 'index')->name('index');

        });


        /*                      Admin Message Routes                  */
        Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
            Route::post('/store',  'store')->name('store');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/', 'index')->name('index');

        });


        /*                      ADMIN USERS ROUTES                  */
        Route::prefix('/users')->name('users.')->controller(UsersController::class)->group(function () {
            Route::post('/store',  'store')->name('store');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::post('/addrole/{id}', 'addrole')->name('addrole');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');
            Route::get('/', 'index')->name('index');

        });


        /*                      Admin Comment Routes                  */
        Route::prefix('/comment')->name('comment.')->controller(CommentsController::class)->group(function () {
            Route::post('/store',  'store')->name('store');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/', 'index')->name('index');

        });


        /*                      Admin FAQ Panel Controller                  */
        Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
            Route::get('/create',  'create')->name('create');
            Route::post('/store',  'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/', 'index')->name('index');

        });
    });
});
// Redirect function
Route::redirect('/tirle','test');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
