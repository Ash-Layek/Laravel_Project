<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\itemController;

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

Route::get('categories/create', function () {
    return view('form');
})->name('initialCreate');




Route::post('categories', [CategoryController::class, 'createCategory'])->name('createCategory');



//Route::post('categories/$id/edit', [CategoryController::class, 'editCategory'])->name('editCategory');


Route::post('categories/{id}/edit', [CategoryController::class, 'editCategory'])->name('editCategory');


Route::patch('categories/{id}', [CategoryController::class, 'sendCategory'])->name('sendCategory');


Route::get('items/create', [itemController::class, 'createItem']);

Route::post('items', [itemController::class, 'Validation'])->name('Validation');








