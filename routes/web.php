<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


Route::get('/', function () {
    return view('intro');
});

Route::get('/register', function () {
    return view('signup');
});

Route::get('/loginn', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/menu2', function () {
    return view('menu2');
});

Route::get('/test', function () {
    return view('test');
});





Route::post('/register', [UserController::class, 'register_account'])->name('register');

Route::get('/login', [UserController::class, 'login_account'])->name('login');