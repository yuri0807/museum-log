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
use App\Http\Controllers\Admin\MuseumController;
Route::controller(MuseumController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('museum/create', 'add')->name('museum.add');
    Route::post('museum/create', 'create')->name('museum.create');
}); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
