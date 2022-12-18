<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserBookController;
use App\Http\Controllers\LoanController;

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
    return view('welcome');
});


Auth::routes();

Route::get('/book', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//user
Route::get('userbook', [UserBookController::class,'read']);


Route::middleware(['auth'])->group(function(){
//admin//
//read
Route::get('book', [BookController::class,'read']);

//add
Route::get('/book/addbook',[BookController::class,'addbook']);
Route::post('/book/store',[BookController::class,'add']);

//edit
Route::get('/book/edit/{id}',[BookController::class,'editbook']);
Route::post('/book/update',[BookController::class,'update']);

//delete
Route::get('/book/delete/{id}',[BookController::class,'delete']);

//loan//


//read
Route::get('loan', [LoanController::class,'read']);

//add
Route::get('/loan/addloan',[LoanController::class,'addloan']);
Route::post('/loan/store',[LoanController::class,'add']);

//edit
Route::get('/loan/edit/{id}',[LoanController::class,'editloan']);
Route::post('/loan/update',[LoanController::class,'update']);

//delete
Route::get('/loan/delete/{id}',[LoanController::class,'delete']);

});




/*Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => ['auth', 'admin']
], function () {
    Route::get('/', [BookController::class,'read'])->name('book');
   // Route::get('book', [BookController::class,'read']);
});*/
