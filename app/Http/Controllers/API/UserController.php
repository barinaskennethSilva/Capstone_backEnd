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
 /* FOR ADMIN CONTROLLER */
 public function adminHeader(){
        return view('/Admin/admin_header');
    }
     public function Admindashboard(){
        return view('/Admin/admin_dashboard');
    }
public function Admin_smg(){
        return view('/Admin/admin_message');
    }
    
     public function loginAdmin(){
        return view('/Admin/admin_login');
    }
    public function AdminSignUp(){
                return view('/Admin/admin_register');
    }   
/* FOR USER CONTROLLER */
   public function dashboard(){
        return view('dashboard');
    }


 public function header(){
        return view('/header');
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
    $registerUser->password = bcrypt($request->input('password')); // Hashing the password

 if ($registerUser->Usertype === 'Admin') {
        $registerUser->Usertype = 'Admin';
        $dashboardUrl = '/Admin/admin_dashboard';
    } else {
        $dashboardUrl = '/dashboard';
    }

    $registerUser->save();

    // Logging in the newly registered user
    Auth::login($registerUser);

    return redirect($dashboardUrl)->with('success', 'Registered successfully');
}
    

           


  public function loginUser(Request $request)
{
 $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check user role and redirect accordingly
            switch ($user->Usertype) {
                case 'Admin':
                    return redirect()->route('admin_dashboard');
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
    // Check if the user is authenticated
    if (Auth::check()) {
        $user = Auth::user();
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Determine the appropriate redirect URL based on the user's Usertype
        $redirectUrl = $user->Usertype === 'Admin' ? '/Admin/admin_login' : '/login';

        return redirect($redirectUrl);
    }

    // If the user is not authenticated, redirect them to the login page
    return redirect('/login');
}

public function transactions()
{
    return $this->hasMany(BookReg::class);
}

}
