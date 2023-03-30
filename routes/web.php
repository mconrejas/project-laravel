<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "ToDo List";
});

Route::get('about', [TestController::class, 'show']);

Route::post('', []);

Route::controller(TodoController::class)->name('todo.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('{id}', 'show')->name('show');
    Route::post('', 'store')->name('store');
    Route::put('{id}', 'update')->name('update');
    Route::delete('{id}', 'delete')->name('delete');
    
});
