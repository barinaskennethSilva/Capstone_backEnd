<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ApiController;
use App\Http\Controllers\MailController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(UserController::class)->group(function(){
Route::post('login','loginUser');
});

/*Route::middleware('auth:api')->group(function(){
Route::post('user','registerUser');
Route::get('logout','userLogout');
})->middleware('auth:api');
*/
Route::controller(UserController::class)->group(function(){
Route::post('register','create');
Route::get('logout','userLogout');
Route::post('login','loginUser');
})->middleware('auth:api');

Route::controller(ApiController::class)->group(function(){
Route::post('book_req','create');
Route::get('booking_record','show');
Route::put('update_record/{id}/update','update');

})->middleware('auth:api');

Route::post('/email/queue', [MailController::class, 'index']);
//Route::post('book_req','ApiController@create');
