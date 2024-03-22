<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon as Carbon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book_req;
use App\Models\Therapist_req;

class ApiController extends Controller
{
    public function transact_record(){
        return view('/transact_record');
    }
      public function booking_reserve(){
        return view('/booking_reserve');
    }
     public function calendar(){
        return view('/calendar');
    }
   
    public function create(Request $request){
        
    $book_req = new Book_req();
    $book_req->Client_name = $request->input('Client_name');
    $book_req->contactNum = $request->input('contactNum');
    $book_req->cust_email = $request->input('cust_email');
    $book_req->Type_service = $request->input('Type_service');
    $book_req->Agent_therapist = $request->input('Agent_therapist');
    $book_req->time_interval = $request->input('time_interval');
    $book_req->Date_schedule = $request->input('Date_schedule');
    $book_req->price = $request->input('price');
    $status = "Pending";
    $book_req->status = $status;
    $book_req->save();
    $message = "Your popup message here";
    return view('/booking_reserve')->with('message', $message);

    }

     public function show(Request $request)
     {
     $user = Auth::user();
     $transact_records = Book_req::where('cust_email', $user->email)->get();
     return view('transact_record', compact('transact_records'));
     }

     public function index($date = null)
     {
        // Get the current date
        $currentDate = Carbon::now();

        // Get the first day of the month
        $firstDayOfMonth = $currentDate->copy()->startOfMonth();

        // Get the last day of the month
        $lastDayOfMonth = $currentDate->copy()->endOfMonth();

        // Generate dates for the current month
        $dates = [];
        for ($date = $firstDayOfMonth; $date->lte($lastDayOfMonth); $date->addDay()) {
            $dates[] = $date->copy();
        }

        return view('calendar', ['dates' => $dates]);

}
 public function edit($id)
    {
        $transact_record = Book_req::findOrFail($id);
        return view('editRecord', compact('transact_record'));
    }
   public function update(Request $request, $id){
        $request->validate([
        'Client_name'=>'required|max:191',
        'cust_email'=>'required|max:191',
        'contactNum'=>'required|max:191',
        'Type_service'=>'required|max:191',
        'Agent_therapist'=>'required|max:191',
        'time_interval'=>'required|max:191',
        'Date_schedule'=>'required|max:191',
        'price'=>'required|max:191',
        ]);
       
       $book_req = Book_req::find($id);
       if($book_req){
         $book_req->Client_name = $request->Client_name;
         $book_req->cust_email = $request->cust_email;
         $book_req->contactNum = $request->contactNum;
         $book_req->Type_service = $request->Type_service;
         $book_req->Agent_therapist = $request->Agent_therapist;
         $book_req->time_interval = $request->time_interval;
         $book_req->Date_schedule = $request->Date_schedule;
         $book_req->price = $request->price;
         $book_req->update();
         return redirect()->route('transact_record')->with('success', 'Booking request updated successfully');
         }
         else{
         return redirect()->route('transact_record')->with('error', 'Booking request not found');
         }
         }

///ADMIN USER
    public function Booking_request(){
    $book_report = Book_req::all();
    return view('/Admin/Booking_request', compact('book_report'));
    }
    public function Register_therapist(Request $request){
    return view('/Admin/Register_therapist');
    }
    public function uploadImage(Request $request){
        
   //      // Generate the auto-generated ID
        $latestRecord = Therapist_req::latest()->first();
         $newNumericPart = $latestRecord ? ((int)explode('-', $latestRecord->emp_id)[1]) + 1 : 1;
         $newId = '12-' . str_pad($newNumericPart, 4, '0', STR_PAD_LEFT);
        
        
 $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $therapist_req = new Therapist_req();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('registration_pic'), $imageName);
        }

        $therapist_req->emp_id = $newId;
        $therapist_req->emp_profile = $imageName;
        $therapist_req->emp_fname = $request->input('emp_fname');
        $therapist_req->emp_lname = $request->input('emp_lname');
        $therapist_req->email_add = $request->input('email_add');
        $therapist_req->Permanent_address = $request->input('Permanent_address');
        $therapist_req->contactNum = $request->input('contactNum');
        $therapist_req->skills = $request->input('skills');
        $therapist_req->Age = $request->input('Age');
        $therapist_req->status = $request->input('status');
        // Save the model
        $therapist_req->save();
        
        // Return a response with success message
        return back()->with('success', 'Therapist request submitted successfully.');
   
    }



    public function editStatus($id){
         $Edit_record = Book_req::findOrFail($id);
        return view('/Admin/statusEdit', compact('Edit_record'));
    }
    public function updateStatus(Request $request, $id){
        $request->validate([
        'Client_name'=>'required|max:191',
        'status'=>'required|max:191',
        ]);
       
       $book_req = Book_req::find($id);
       if($book_req){
         $book_req->Client_name = $request->Client_name;
         $book_req->status = $request->status;
         $book_req->update();
         return redirect()->route('Booking_request')->with('success', 'Booking request updated successfully');
         }
         else{
         return redirect()->route('Booking_request')->with('error', 'Booking request not found');
         }
         }
   public function delete($id) {
    $Edit_record = Book_req::findOrFail($id);
    $Edit_record->delete();    
    return redirect()->route('Booking_request')->with('success', 'Transaction deleted successfully.');
   }

    public function Therapist_list(Request $request){
   $list_therapist = Therapist_req::all();
    return view('/Admin/Therapist_list', compact('list_therapist'));
        }

    public function EditList($id){
         $EditList = Therapist_req::findOrFail($id);
        return view('/Admin/Edit_TherapistList', compact('EditList'));
    }
    public function updateList(Request $request, $id){
 $request->validate([
        'emp_fname'=>'required|max:191',
        'emp_lname'=>'required|max:191',
        'Permanent_address'=>'required|max:191',
        'email_add'=>'required|max:191',
        'contactNum'=>'required|max:191',
        'skills'=>'required|max:191',
        'Age'=>'required|max:191',
        'status'=>'required|max:191',
        ]);
       
       $Therapist_record = Therapist_req::find($id);
       if($Therapist_record){
         $Therapist_record->emp_fname = $request->emp_fname;
         $Therapist_record->emp_lname = $request->emp_lname;
         $Therapist_record->Permanent_address = $request->Permanent_address;
         $Therapist_record->email_add = $request->email_add;
         $Therapist_record->contactNum = $request->contactNum;
         $Therapist_record->skills = $request->skills;
         $Therapist_record->Age = $request->Age;
         $Therapist_record->status = $request->status;
         $Therapist_record->update();
         return redirect()->route('Therapist_list')->with('success', 'Booking request updated successfully');
         }
         else{
         return redirect()->route('Therapist_list')->with('error', 'Booking request not found');
         }
    }
    public function deleteList($id) {
    $Edit_record = Therapist_req::findOrFail($id);
    $Edit_record->delete();    
    return redirect()->route('Therapist_list')->with('success', 'Transaction deleted successfully.');
   }
    public function Therapist_record(Request $request)
    {
    $Therapist_req = new Therapist_req();
    $Therapist_req->emp_id =      $request->input('emp_id');
    $Therapist_req->emp_profile = $request->input('emp_profile');
    $Therapist_req->emp_fname =   $request->input('emp_fname');
    $Therapist_req->emp_lname =   $request->input('emp_lname');
    $Therapist_req->email_add =   $request->input('email_add');
    $Therapist_req->Permanent_address = $request->input('Permanent_address');
    $Therapist_req->contactNum = $request->input('contactNum');
    $Therapist_req->skills =     $request->input('skills');
    $Therapist_req->status =     $request->input('status');
    $Therapist_req->save();
    $message = "Your popup message here";
    session()->flash('message', $message);
    return redirect('/booking_reserve');
    }
    public function Profit_report(Request $request,$year = null, $month = null){
$totalCustomers = Book_req::count();
        $customersWithAppointments = Book_req::distinct()->count('id');
        $percentage = $totalCustomers > 0 ? ($customersWithAppointments / $totalCustomers) * 100 : 0;
$month = $request->input('month');
$year = $request->input('year');

// Query to retrieve data for the selected month with status 'done'
$doneData = Book_req::whereYear('Date_schedule', $year)
    ->whereMonth('Date_schedule', $month)
    ->where('status', 'done')
    ->get();

// Query to retrieve data for the selected month with status 'Pending'
$pendingData = Book_req::whereYear('Date_schedule', $year)
    ->whereMonth('Date_schedule', $month)
    ->where('status', 'Pending')
    ->get();

// Initialize variables to calculate income profit and pending total
$totalClients = $doneData->count(); // Total number of clients with status 'done'
$incomeProfit = $doneData->sum('price'); // Total income profit for status 'done'

$pendingTotal = $pendingData->count(); // Total number of clients with status 'Pending'

// Prepare data to pass to the view



//calendar function
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


// Pass data to the view
return view('Admin.Profit_report', [
    'doneData' => $doneData, // Pass the retrieved data with status 'done' to the view
    'pendingData' => $pendingData, // Pass the retrieved data with status 'Pending' to the view
    'currentMonth' => $currentMonth,
    'prevYear' => $prevMonth->year,
    'nextYear' => $nextMonth->year,
    'weeks' => $weeks,
    'prevMonth' => $prevMonth,
    'nextMonth' => $nextMonth,
    'totalClients' => $totalClients,
    'incomeProfit' => $incomeProfit,
    'pendingTotal' => $pendingTotal,
], compact('percentage'));



        }

    

    }
