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
public function uploadImage(Request $request) {
    // Validate the uploaded file
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imagePath = $request->file('image')->store('/registration_pic', 'public');

    // Get the URL of the uploaded image
    $imageUrl = asset('storage/' . $imagePath);

    // Pass the URL to the view
    return view('/Admin/Register_therapist', ['imageUrl' => $imageUrl]);
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
    
    // Check if the authenticated user has permission to delete the transaction
    // Implement your own authorization logic here
    
    $Edit_record->delete();
    
    // Optionally, you can flash a success message or handle other operations
    
    return redirect()->route('Booking_request')->with('success', 'Transaction deleted successfully.');
}





    public function Therapist_list(Request $request){
    return view('/Admin/Therapist_list');
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
    public function Profit_report(){
    return view('/Admin/Profit_report');    
    }
    
    }
