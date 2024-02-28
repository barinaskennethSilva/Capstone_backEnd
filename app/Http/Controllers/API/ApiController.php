<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book_req;
class ApiController extends Controller
{
    public function create(Request $request){
        $book_req = new Book_req();
       $book_req->Client_name = $request->input('Client_name');
              $book_req->contactNum = $request->input('contactNum');
       $book_req->Type_package = $request->input('Type_package');
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
}
