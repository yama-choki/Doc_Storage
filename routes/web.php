<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocStrageController;

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

Route::prefix('docs')
->middleware(['auth'])
->controller(DocStrageController::class)
->name('docs.')
->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}/edit', 'edit')->name('edit');
    // Route::get('/{id}', 'show')->name('show');
    Route::post('/{id}', 'update')->name('update');
    Route::post('/{id}', 'delete')->name('delete');
    Route::post('/{id}/destroy', 'destroy')->name('destroy');
});

// Route::middleware(['auth'])->resource('docs', DocStrageController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
