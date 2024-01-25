<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function loginUser(Request $request): Response
    {
       $input = $request->all();

    // Attempt authentication
    if (Auth::attempt($input)) {
        // Authentication successful
        $user = Auth::user();

        if ($user) {
            // User exists, generate token
            $token = $user->createToken('example')->accessToken;
            return new Response(['status' => 200, 'token' => $token], 200);
        } else {
            // Auth::user() returned null
            return new Response(['status' => 500, 'message' => 'Internal Server Error'], 500);
        }
    } else {
        // Authentication failed
        return new Response(['status' => 401, 'message' => 'Unauthorized'], 401);
    }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function getUserDetail(): Response
    {
        $user = Auth::user();
        return Response(['data'=> $user],200);
    }

    /**
     * Display the specified resource.
     */
    public function userLogout(): Response
    {
        //
    }

   
}
