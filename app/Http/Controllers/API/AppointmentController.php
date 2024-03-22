<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book_req;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function index()
    {
        // Retrieve data from the database
        $totalCustomers = Customer::count();
        $customersWithAppointments = Appointment::distinct()->count('customer_id');
        
        // Calculate percentage
        $percentage = $totalCustomers > 0 ? ($customersWithAppointments / $totalCustomers) * 100 : 0;
        
        return view('appointments.index', compact('percentage'));
    }
   public function bookreqApi(Request $request)
{
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'Client_name' => 'required',
        'contactNum' => 'required',
        'cust_email' => 'required|email',
        'Type_service' => 'required',
        'Agent_therapist' => 'required',
        'time_interval' => 'required',
        'Date_schedule' => 'required|date',
        'price' => 'required|numeric',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    // Create a new Book_req instance and save it to the database
    $book_req = new Book_req();
    $book_req->fill($request->all());
    $book_req->status = 'Pending';
    $book_req->save();

    // Return a JSON response indicating successful booking
    return response()->json(['message' => 'Booking successful'], 201);
}
}
