<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookListController;
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

/settings
/profile
/book webpage

MVC - models, views, constollers

controller - handles request - controllers what needs to happen
model - interacts and handles with database and files
view - html and css 
*/
       //get request
Route::get('/', function () {
    return view('welcome'); //return welcome.blade file 
    //view - build in function in laravel
})->name('homeRoute');

Route::get('/login', [AuthController::class, 'login'])->name('loginRoute'); //displays the login form
Route::post('/login', [AuthController::class, 'loginPost'])->name('loginPostRoute');

Route::get('/register', [AuthController::class, 'register'])->name('registerRoute');
Route::post('/register', [AuthController::class, 'registerPost'])->name('registerPostRoute');

//Route::get('booklist', [BookListController::class, 'booklist'])->name('booklistRoute');
Route::get('/books', [BookListController::class, 'index']);

Route::get('/book', function(){
    return view('book_template');
});

Route::get('/books/{isbn}', [BookListController::class, 'showBook'])->name('books.show');