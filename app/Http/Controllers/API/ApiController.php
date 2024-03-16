<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon as Carbon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book_req;
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
            $book_req->save();
                $message = "Your popup message here";
        return view('/booking_reserve')->with('message', $message);
        

    }

public function show(Request $request) {
        /*   $user = Auth::user();
    $transact_records = Book_req::all();
    return view('transact_record', compact('transact_records')); */
     $user = Auth::user();
    
    // Fetch only the records associated with the authenticated user
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


     public function update(Request $request, $id){
        $request->validate([
        'Client_name'=>'required|max:191',
        'contactNum'=>'required|max:191',
        'Type_package'=>'required|max:191',
        'Type_service'=>'required|max:191',
        'Agent_therapist'=>'required|max:191',
        'time_interval'=>'required|max:191',
        'Date_schedule'=>'required|max:191',
        'price'=>'required|max:191',
        ]);
       
       $book_req = Book_req::find($id);
       if($book_req){
         $book_req->Client_name = $request->Client_name;
              $book_req->contactNum = $request->contactNum;
       $book_req->Type_package = $request->Type_package;
        $book_req->Type_service = $request->Type_service;
         $book_req->Agent_therapist = $request->Agent_therapist;
        $book_req->time_interval = $request->time_interval;
           $book_req->Date_schedule = $request->Date_schedule;
  $book_req->price = $request->price;
            $book_req->update();
            return response()->json(['message'=>'Booking request find successfuly'], 200);
        }
        else{
    return response()->json(['message'=>'Booking request not found'], 400);
        }
     }


}
