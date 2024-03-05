<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

use Auth;
class UserController extends Controller
{
   public function Home(){
        return view('/Home');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function register(){
        return view('/register');
    }
        public function login(){
        return view('/login');
    }
    public function create(Request $request)
    {
       $registerUser = new User();
        $registerUser->Usertype = $request->input('Usertype');
       $registerUser->fname = $request->input('fname');
       $registerUser->lname = $request->input('lname');
        $registerUser->email = $request->input('email');
         $registerUser->email_verified_at = $request->input('email_verified_at');
         $registerUser->contactNum = $request->input('contactNum');
        $registerUser->Permanent_address = $request->input('Permanent_address');  
           $registerUser->password = $request->input('password');

            $registerUser->save();
          return  redirect('/Home')->with( 'success', 'Register successfully');

  
    
    }

           


  public function loginUser(Request $request)
{
  $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:5',
    ]);

    $credentials = $request->only('Usertype','email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        $Usertype = $user->Usertype;
        if ($Usertype) {
            $role = $Usertype === 'admin' ? 'Admin' : 'User';
            return response()->json(['message' => 'Welcome ' . $role . ' ' . $user->fname . ' ' . $user->lname . '! You have successfully logged in.'], 200);
        } else {
            return response()->json(['message' => 'User type not found for the user.'], 400);
        }
    }

    return response()->json(['message' => 'Email and Password are Incorrect.'], 400);


}
    
       
}
