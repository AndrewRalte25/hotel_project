<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

Route::middleware('auth:admin')->group(function () {
    Route::get('/hotels', [HotelController::class,'index']);
    Route::get('/hoteladd', [HotelController::class, 'create']);
    Route::post('/hoteladd', [HotelController::class, 'store']);
    Route::put('/categories/{id}', [CategoriesController::class, 'update']);
    Route::delete('/hotels/{id}', [HotelController::class, 'destroy']);

    Route::get('/items', [ItemController::class,'index']);
    Route::get('/itemadd', [ItemController::class, 'create']);
    Route::post('/items', [ItemController::class, 'store']);
    Route::put('/update/{id}', [ItemController::class, 'update']);
    Route::get('/edit/{id}', [ItemController::class, 'edit']);
    Route::delete('/items/{id}', [ItemController::class, 'destroy']);

});



