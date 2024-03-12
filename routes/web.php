<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\StudentController;
use App\Models\Picture;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    return view('index');
});

Route::get('/greeting/{id}', [StudentController::class, 'show']);

Route::get('/greeting', [StudentController::class, 'cek']);

Route::get('/', [StudentController::class, 'index'] )->name('home');
Route::get('/filter', [StudentController::class, 'filter'] );
Route::get('/show/{id}', [StudentController::class, 'show'])->name('show');
Route::get('/update_password', [HomeController::class, 'update_password'])->name('update_password');
Route::patch('/store_password', [HomeController::class, 'store_password'])->name('store_password');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Role Admin

Route::middleware(['admin'])->group(function()
{
    Route::get('/create', [StudentController::class, 'create'] )->name('create');
    Route::post('/create', [StudentController::class, 'store'] )->name('store');
    Route::get('/edit/{student}', [StudentController::class, 'edit'])->name('edit');
    Route::patch('/update/{student}', [StudentController::class, 'update'])->name('update');
    Route::delete('/delete/{student}', [StudentController::class, 'delete'])->name('delete');
    
});

Route::get('/locale/{locale}', [LocaleController::class, 'set_locale'])->name('set_locale');

// Storage
Route::get('/picture/create', [PictureController::class, 'create'])->name('picture.create');
Route::post('/picture/create', [PictureController::class, 'store'])->name('picture.store');
Route::get('/picture/{picture}', [PictureController::class, 'show'])->name('picture.show');
Route::delete('/picture/{picture}', [PictureController::class, 'delete'])->name('picture.delete');
Route::get('copy/{picture}', [PictureController::class, 'copy'])->name('picture.copy');
Route::get('move/{picture}', [PictureController::class, 'move'])->name('picture.move');