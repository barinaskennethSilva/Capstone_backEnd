<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and assigned to the "web"
| middleware group, which means they are protected by session state.
|
*/

Route::get('/', function () {
    return view('welcome'); // Assuming you have a blade file named 'login.blade.php'
});

    Route::get('/register', [UserController::class,'register'])->name('register');
Route::post('/register', [UserController::class,'create'])->name('register');
    Route::get('/login', [UserController::class,'login'])->name('login');
Route::post('/login', [UserController::class,'loginUser'])->name('login');
    Route::get('/Home', [UserController::class,'Home'])->name('Home');
Route::group(['middleware'=>'auth'],function (){


});

