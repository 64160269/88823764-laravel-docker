<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/Home', function () {
    return view('Home');
});

// Route::post('/Show', function (Request $request) {
//     $email = $request->email;
//     $password = $request->pass;
//     return view('Show', ['email' => $email, 'pass' => $password]);
// })-> name("Show");

