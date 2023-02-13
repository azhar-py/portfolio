<?php

use Illuminate\Support\Facades\Route;
use Auth\VerificationController;

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

Route::get('/login', function () {
    return redirect('login');
});



Route::get('/create', function () {
    return view('auth/register');
});


Auth::routes(['verify'=>true]);

Route::get('account/verify/{token}', [AuthController::class, 'verifyAccount'])->name('user.verify');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* New Added Routes */
Route::get('dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'is_verify_email']); 

