<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;

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


Route::controller(ProductController::class)->group(function(){
    Route::get('/products','index')->name('products.index');
    Route::post('product/add','store')->name('product.add');
    Route::get('product/manage','show')->name('product.manage');
    Route::get('product/atoi/{id}','atoi')->name('product.atoi');
    Route::get('product/itoa/{id}','itoa')->name('product.itoa');
    Route::get('product/delete/{id}','destroy')->name('product.delete');
    Route::get('product/edit/{id}','edit')->name('product.edit');
    Route::post('product/update/{id}','update')->name('product.update');
});
Route::get('/', function () {
    return view('backend.dashboard');
})->name('dashboard');