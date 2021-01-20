<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\FrontEndController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\FrontEndController::class, 'contact'])->name('contact');
Route::get('/portfolio', [App\Http\Controllers\FrontEndController::class, 'portfolio'])->name('portfolio');
Route::get('/blog', [App\Http\Controllers\FrontEndController::class, 'blog'])->name('blog');
Route::get('/work', [App\Http\Controllers\FrontEndController::class, 'work'])->name('work');

Route::post('/contact','ContactFormController@store')->name('contact.store');
