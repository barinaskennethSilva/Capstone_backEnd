<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\ApiController;


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
Route::get('/header', [UserController::class, 'header'])->name('header');


Route::get('/Admin/admin_dashboard', [AdminController::class, 'Admindashboard'])->name('admin.dashboard');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');





Route::get('/booking_reserve', [ApiController::class, 'booking_reserve'])->name('booking_reserve');
Route::post('/booking_reserve', [ApiController::class, 'create'])->name('booking_reserve');
Route::get('/transact_record', [UserController::class, 'transact_record'])->name('transact_record');
Route::get('/calendar', [UserController::class, 'calendar'])->name('calendar');
Route::get('/chat_view', [UserController::class, 'chat_view'])->name('chat_view');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::group(['middleware'=>'auth'],function (){


});

