<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
