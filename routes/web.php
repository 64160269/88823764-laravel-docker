<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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
    return view('login');
});

Route::post('/Show', [HomeController::class,'show_home'])->name('Show');

// Route::post('/Show', function (Request $request) {
//     $email = $request->email;
//     $password = $request->pass;
//     return view('Show', ['email' => $email, 'pass' => $password]);
// })-> name("Show");

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::post('/login', [App\Http\Controllers\ConnectController::class, 'connect'])->name('connect');
