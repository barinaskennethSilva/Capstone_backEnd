<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book_req;
class ApiController extends Controller
{
      public function booking_reserve(){
        return view('/booking_reserve');
    }
    public function create(Request $request){
        $book_req = new Book_req();
       $book_req->Client_name = $request->input('Client_name');
              $book_req->contactNum = $request->input('contactNum');
        $book_req->Type_service = $request->input('Type_service');
         $book_req->Agent_therapist = $request->input('Agent_therapist');
        $book_req->time_interval = $request->input('time_interval');
           $book_req->Date_schedule = $request->input('Date_schedule');
  $book_req->price = $request->input('price');
            $book_req->save();
            return response()->json( $book_req);
       
    }
     public function show(Request $request){

 $reservations = Book_req::all();

        return response()->json(['data' => $reservations]);


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
