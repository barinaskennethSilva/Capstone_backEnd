<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\RedirectResponse;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use Auth;
class UserController extends Controller
{
    

   public function dashboard(){
        return view('dashboard');
    }


 public function header(){
        return view('/header');
    }
public function booking_reserve(){
        return view('/booking_reserve');
    }
    public function transact_record(){
        return view('/transact_record');
    }
    public function calendar(){
        return view('/calendar');
    }
     public function chat_view(){
        return view('/chat_view');
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
          return  redirect('/dashboard')->with( 'success', 'Register successfully');

  
    
    }

           


  public function loginUser(Request $request)
{

 $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check user role and redirect accordingly
            switch ($user->role) {
                case 'Admin':
                    return redirect()->route('admin.dashboard');
                    break;
              //  case 'manager':
               //     return redirect()->route('manager.dashboard');
               //     break;
                default:
                case 'User':
                    return redirect()->route('dashboard');
            }
        }

        return redirect()->route('login')->with('error', 'Login failed. Please check your credentials.');


}
       






public function logout(Request $request): RedirectResponse
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/login');
}


}
