<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\RedirectResponse;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Book_req;
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
        $totalCustomers = Book_req::count();
        $customersWithAppointments = Book_req::distinct()->count('id');
        $percentage = $totalCustomers > 0 ? ($customersWithAppointments / $totalCustomers) * 100 : 0;
        return view('/Admin/admin_dashboard', compact('percentage'));
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
    public function Admin_profile(){
            return view('/Admin/Admin_profile');
}
/* FOR USER CONTROLLER */
public function AboutUs(){
    return view('AboutUs');
}
public function ServiceOffer(){
    return view('ServiceOffer');
}
   public function dashboard(){
        return view('dashboard');
    }


 public function header(){
        return view('/header');
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
            if ($user->Usertype === 'Admin') {
                return redirect()->route('admin_dashboard');
            } else {
                Auth::logout();
                return redirect()->route('login')->with('error', 'You are not authorized to access this dashboard.');
            }
            break;
        case 'User':
            if ($user->Usertype === 'User') {
                return redirect()->route('dashboard');
            } else {
                Auth::logout();
                return redirect()->route('login')->with('error', 'You are not authorized to access this dashboard.');
            }
            break;
        default:
            Auth::logout();
            return redirect()->route('login')->with('error', 'Invalid user type.');
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
//FOR USER Profile
public function User_profile(){
            return view('/User_profile');

}

public function User_profileImg(Request $request)
{
 $user = Auth::user();

$request->validate([
    'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
]);

$imageName = $user->user_profile;

if ($request->hasFile('profile_image')) {
    $image = $request->file('profile_image');

    // Ensure the file is uploaded successfully
    if ($image->isValid()) {
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the storage folder
        // $image->storeAs('User_folder', $imageName);
        $image->move(public_path('User_folder'), $imageName);

        // Delete old profile image if exists
        // if ($user->user_profile) {
        //     User::delete(public_path('User_folder') . $user->user_profile);
        // }
    }
}

$user->user_profile = $imageName;
$user->save();

return redirect()->back()->with('success', 'Profile updated successfully.');

}
public function profile_update(Request $request)
{
   $user = Auth::user();
$user->fname = $request->input('fname');
$user->lname = $request->input('lname');
$user->email = $request->input('email');
$user->contactNum = $request->input('contactNum');
$user->Permanent_address = $request->input('Permanent_address');
$user->password = $request->input('password');

// Update the profile image name in the user model

$user->save();

return redirect()->back()->with('success', 'Profile updated successfully.');

}
}
