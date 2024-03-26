<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\ApiController;
use App\Http\Controllers\API\MessageController;
use App\Models\Message;

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
// USER HOME PAGES
Route::get('/', function () {
    return view('welcome');
    });
        Route::get('/home_header', [UserController::class,'home_header'])->name('home_header');
        Route::get('AboutUs', [UserController::class,'AboutUs'])->name('AboutUs');
        Route::get('ServiceOffer', [UserController::class,'ServiceOffer'])->name('ServiceOffer');
        Route::get('/register', [UserController::class,'register'])->name('register');
        Route::post('/register', [UserController::class,'create'])->name('register');
        Route::get('/login', [UserController::class,'login'])->name('login');
        Route::post('/login', [UserController::class,'loginUser'])->name('login');

// USER MAIN PAGES
Route::get('User_profile', [UserController::class, 'User_profile'])->name('User_profile');
Route::put('profile.update', [UserController::class, 'profile_update'])->name('profile.update');
Route::put('User_profile', [UserController::class, 'User_profileImg'])->name('profile.updateImage');

Route::get('/header', [UserController::class, 'header'])->name('header');
Route::get('/booking_reserve', [ApiController::class, 'booking_reserve'])->name('booking_reserve');
Route::post('/booking_reserve',[ApiController::class, 'create'])->name('booking_reserve');
Route::get('/transact_record', [ApiController::class, 'show'])->name('transact_record');
Route::post('/transact_record',[ApiController::class, 'show'])->name('transact_record');
Route::get('/editRecord/{id}/edit', [ApiController::class, 'edit'])->name('editRecord');
Route::put('/editRecord/{id}/update', [ApiController::class, 'update'])->name('editRecordUpdate');


use Carbon\Carbon;
Route::get('/calendar/{year?}/{month?}', function ($year = null, $month = null) {
    $currentMonth = Carbon::now();

    if ($year && $month) {
        $currentMonth = Carbon::create($year, $month, 1, 0, 0, 0);
    }

    $prevMonth = $currentMonth->copy()->subMonth();
    $nextMonth = $currentMonth->copy()->addMonth();

    // Get the starting day of the week for the current month
    $firstDayOfMonth = $currentMonth->copy()->startOfMonth();
    $firstDayOfWeek = $firstDayOfMonth->dayOfWeek;

    // Adjust the start of the week based on the day of the week for March 1st, 2024 (Friday)
    $startDay = ($firstDayOfWeek + 7) % 7; // Convert Carbon's dayOfWeek to 0-based index

    $currentDay = $firstDayOfMonth->copy()->subDays($startDay);

    $weeks = [];
    $lastDayOfMonth = $currentMonth->copy()->endOfMonth();

    while ($currentDay->lte($lastDayOfMonth)) {
        $week = [];
        for ($i = 0; $i < 7; $i++) {
            $week[] = [
                'day' => $currentDay->day,
                'currentMonth' => $currentDay->month == $currentMonth->month,
                'isToday' => $currentDay->isToday(),
            ];
            $currentDay->addDay();
        }
        $weeks[] = $week;
    }

    return view('calendar', [
        'weeks' => $weeks,
        'currentMonth' => $currentMonth,
        'prevYear' => $prevMonth->year,
        'prevMonth' => $prevMonth->month,
        'nextYear' => $nextMonth->year,
        'nextMonth' => $nextMonth->month,
    ]);
})->name('calendar');
Route::get('/chat_view/{user}', [MessageController::class, 'chat_view'])->name('chat_view');
Route::post('/chat_view/send', [MessageController::class, 'chat_view'])->name('chat_view');


// ADMIN ROUTER
Route::post('/Admin/admin_register', [UserController::class,'create'])->name('admin_register');
Route::get('/Admin/admin_register', [UserController::class,'AdminSignUp'])->name('admin_register');


Route::get('/Admin/admin_login', [UserController::class,'loginAdmin'])->name('admin_login');
Route::post('/Admin/admin_login', [UserController::class,'loginUser'])->name('admin_login');

Route::middleware(['checkrole:Admin'])->group(function () {
Route::get('/Admin/admin_header', [UserController::class, 'adminHeader'])->name('admin_header');
Route::get('/Admin/Register_therapist', [ApiController::class, 'Register_therapist'])->name('Register_therapist');
Route::post('/Admin/Register_therapist', [ApiController::class, 'uploadImage'])->name('Register_therapistUpload');
Route::get('/Admin/admin_message', [UserController::class, 'Admin_smg'])->name('admin_message');
Route::post('/Admin/admin_message', [UserController::class, 'showMessagePage'])->name('admin_message');

});
Route::middleware(['checkrole:Admin'])->group(function () {

// Route::get('User_profile', [UserController::class, 'User_profile'])->name('User_profile');
Route::get('/Admin/admin_dashboard', [UserController::class, 'Admindashboard'])->name('admin_dashboard');
Route::get('/Admin/Booking_request', [ApiController::class,'Booking_request'])->name('Booking_request');
Route::post('/Admin/Booking_request', [ApiController::class,'Booking_request'])->name('Booking_request');

Route::get('/Admin/Admin_profile', [UserController::class, 'Admin_profile'])->name('Admin_profile');

Route::get('/Admin/searchBooking_req', [ApiController::class,'search_bookingReq'])->name('search_bookingResearch');
Route::get('/statusEdit/{id}/editStatus', [ApiController::class,'editStatus'])->name('statusEdit');
Route::put('/statusEdit/{id}/updateStatus', [ApiController::class,'updateStatus'])->name('statusEditUpdate');
Route::delete('/Edit_record/{id}', [ApiController::class, 'delete'])->name('Edit_record.delete');
Route::get('/Admin/Therapist_list', [ApiController::class,'Therapist_list'])->name('Therapist_list');
Route::post('/Admin/Therapist_list', [ApiController::class,'Therapist_record'])->name('Therapist_list');
Route::get('/Admin/search_therapist', [ApiController::class,'search_record'])->name('search');

Route::get('/Admin/Edit_TherapistList/{id}/EditList', [ApiController::class,'EditList'])->name('update_TherapistList');
Route::put('/Admin/Edit_TherapistList/{id}/updateList', [ApiController::class,'updateList'])->name('Edit_TherapistList');
Route::delete('/Therapist_list/{id}', [ApiController::class, 'deleteList'])->name('deleteList.delete');


Route::get('/Admin/Profit_report/{year?}/{month?}', [ApiController::class, 'Profit_report'])->name('Profit_report');
Route::post('/Admin/Profit_report', [ApiController::class, 'showRecordsByDate'])->name('show-records-by-date');

});
Route::middleware(['checkrole:User'])->group(function () {
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});





Route::post('/logout', [UserController::class, 'logout'])->name('logout');

 
Route::group(['middleware'=>'auth'],function (){


});

