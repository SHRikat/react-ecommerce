<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\insertcontroller;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', [insertcontroller::class, 'index']);
Route::post('/submitinfo', [insertcontroller::class, 'submitinfo']);

Route::get('/view', [insertcontroller::class, 'viewinfo']);