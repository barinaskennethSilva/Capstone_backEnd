<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\ApiController;
use App\Http\Controllers\AppointmentController;


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
Route::get('/header', [UserController::class, 'header'])->name('header');
Route::get('/booking_reserve', [ApiController::class, 'booking_reserve'])->name('booking_reserve');
Route::post('/booking_reserve',[ApiController::class, 'create'])->name('booking_reserve');
Route::get('/transact_record', [ApiController::class, 'show'])->name('transact_record');
Route::post('/transact_record',[ApiController::class, 'show'])->name('transact_record');


Route::get('/editRecord/{id}/edit', [ApiController::class, 'edit'])->name('editRecord');
Route::put('/editRecord/{id}/update', [ApiController::class, 'update'])->name('editRecordUpdate');
// Assuming your controller is named TransactRecordController
// Route::put('/transact_record/{id}', [ApiController::class, 'update'])->name('transact_record.update');

// Route::get('/edit-record/{editRecord}/edit', [EditRecordController::class, 'edit'])->name('editRecord.edit');
// Route::put('/edit-record/{editRecord}', [EditRecordController::class, 'update'])->name('editRecord.update');
Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');




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
Route::get('/chat_view', [UserController::class, 'chat_view'])->name('chat_view');


// ADMIN ROUTER
Route::post('/Admin/admin_register', [UserController::class,'create'])->name('admin_register');
Route::get('/Admin/admin_register', [UserController::class,'AdminSignUp'])->name('admin_register');


Route::get('/Admin/admin_login', [UserController::class,'loginAdmin'])->name('admin_login');
Route::post('/Admin/admin_login', [UserController::class,'loginUser'])->name('admin_login');

Route::middleware(['checkrole:Admin'])->group(function () {
Route::get('/Admin/admin_header', [UserController::class, 'adminHeader'])->name('admin_header');

Route::get('/Admin/admin_message', [UserController::class, 'Admin_smg'])->name('admin_message');
Route::post('/Admin/admin_message', [UserController::class, 'showMessagePage'])->name('admin_message');

});
Route::middleware(['checkrole:Admin'])->group(function () {

Route::get('/Admin/admin_dashboard', [UserController::class, 'Admindashboard'])->name('admin_dashboard');

});
Route::middleware(['checkrole:User'])->group(function () {
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});





Route::post('/logout', [UserController::class, 'logout'])->name('logout');

 
Route::group(['middleware'=>'auth'],function (){


});

