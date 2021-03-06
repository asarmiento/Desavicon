<?php

  use App\Http\Controllers\CustomerController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/register-customer', [CustomerController::class,'register'])->name('register-customer');
Route::get('/editar-customer', [CustomerController::class,'edit'])->name('customer.edit');
Route::post('/store-customer', [CustomerController::class,'store'])->name('store-customer');
Route::get('/list-customers', [CustomerController::class,'index'])->name('list-customers');
