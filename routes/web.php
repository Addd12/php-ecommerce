<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/', [HomeController::class, 'index']);
route::get('/redirect', [HomeController::class, 'redirect']);

route::get('/product', [AdminController::class, 'product']);
route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);
route::get('/showproduct', [AdminController::class, 'showproduct']);
route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);
route::get('/updateview/{id}', [AdminController::class, 'updateview']);
route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);
