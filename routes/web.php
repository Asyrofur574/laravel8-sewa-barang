<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TampilController;

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
Route::get('/home', function(){
    return view('home.index');
    });
// Route::get('/stok', function(){
//     return view('home.stok');
//     });
Route::get('/sewa', [TampilController::class, 'index']);
Route::get('/tentang', function(){
    return view('home.tentang');
    });

// Route::post('/login', 'LoginController@index');
// Route::get('/login', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/proses', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register/proses', [LoginController::class, 'create']);
Route::get('/admin', [LoginController::class, 'admin']);

Route::resource('/admin', BarangController::class);
    
