<?php

namespace App\Http\Controllers;
use App\Mail\WelcomeUserMail;
use App\Models\User;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\Location;
use App\Models\Role;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostType;



use App\Models\SubCategory;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;  
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Twilio\Rest\Client;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Storage;


class CustomAuthController extends Controller
{

    


//FaceBook
// public function facebookLogin(){
//     return Socialite::driver('facebook')->stateless()->redirect();
//     }

    
    //facebook callback  
//     public function handleFacebookCallback(){
//     try {
//         $user = Socialite::driver('facebook')->stateless()->user();
//         $findUser = User::where('email', $user->email)->first();

//         if (!$findUser) {
//             $findUser = new User();
//             $findUser->name = $user->name;
//             $findUser->email = $user->email;
//             $findUser->password = bcrypt('1234567'); 
//             $findUser->role = 'user';
//             $findUser->phone = '+923173447987'; 
//             $findUser->provider_id = $user->id;
//             $findUser->login_from= 'facebook user';

//             $findUser->save();
//         }

//         Auth::login($findUser); 
//         return redirect('/');

//     } catch (Exception $e) {
//         dd($e->getMessage());
//     }
    
// }
    
//     //googleLogin
//     public function googleLogin(){
//         return Socialite::driver('google')->redirect();
//     }


//     public function googleHandle() {
//         try {
//             $user = Socialite::driver('google')->user();
//             $findUser = User::where('email', $user->email)->first();
    
//             if (!$findUser) {
//                 $findUser = new User();
//                 $findUser->name = $user->name;
//                 $findUser->email = $user->email;
//                 $findUser->password = bcrypt('1234567'); 
//                 $findUser->role = 'user';
//                 $findUser->phone = '+923173447987'; 
//                 $findUser->provider_id = $user->id;
//                 $findUser->login_from= 'google user';
//                 $findUser->save();
//             }
    
//             Auth::login($findUser); 
//             return redirect('/');
    
//         } catch (Exception $e) {
//             dd($e->getMessage());
//         }
//     }
    
    public function login()
    {
       
        return view("auth.login");
    }

    public function registration()
    {
       
         $countries = Country::all(); 
         return view('welcome', compact('countries'));
      
    }

public function registerUser(Request $request)
{
    
    $request->validate([
        'name'             => 'required|string',
        'email'            => 'required|email|unique:users,email',
        'password'         => 'required|min:6',
        'mobile'           => 'required',
        'country_id'       => 'required',
        'state_id'         => 'required',
        'city_id'          => 'required',
        'role'             => 'required',
        'expertise_level'  => 'required',
    ]);

    $user = new User();
    $user->name             = $request->name;
    $user->email            = $request->email;
    $user->password         = Hash::make($request->password);
    $user->mobile           = $request->mobile;
    $user->expertise_level  = $request->expertise_level;
    $user->is_approve       = ($request->role === 'admin') ? 1 : 0;

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('user_images', 'public');
        $user->image = $path;
    }

    $user->save();

    // Save location
    Location::updateOrCreate(
        ['user_id' => $user->id],
        [
            'country_id' => $request->country_id,
            'state_id'   => $request->state_id,
            'city_id'    => $request->city_id,
        ]
    );

  
    $role = Role::where('role_name', $request->role)->first();

    if ($role) {
        $user->roles()->attach($role->role_id);
    }

    return redirect()->route('welcome')->with('message', 'User submitted for approval. Wait for confirmation message on your email');
}
public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    // Update image if uploaded
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('user_images', 'public');
        $user->image = $path;
    }

    // Update basic user info
    $user->name            = $request->name;
    $user->email           = $request->email;
    $user->mobile          = $request->mobile;
    $user->expertise_level = $request->expertise_level;

    $user->save();

    // Update or create location linked to user
    Location::updateOrCreate(
        ['user_id' => $user->id],
        [
            'country_id' => $request->country_id,
            'state_id'   => $request->state_id,
            'city_id'    => $request->city_id,
        ]
    );

   
    $role = Role::where('role_name', $request->role)->first();

    if ($role) {
        
        $user->roles()->sync([$role->role_id]);
    }

    return redirect('admin/table')->with('message', 'User updated successfully!');
}

//profile

public function profile()
{
    
    return view('admin.profile');
}

public function viewProfile($id)
{
   
    $user = User::findOrFail($id);
    return view('admin.profile', compact('user'));
}



       
        // try {
        //     $sid = env('TWILIO_SID');
        //     $token = env('TWILIO_TOKEN');
        //     $twilio = new \Twilio\Rest\Client($sid, $token);
        //     $twilio->messages->create($user->phone, [
        //         'from' => env('TWILIO_FROM'),
        //         'body' => "Your OTP is: $otp"
        //     ]);
        // } catch (\Exception $e) {
        //     return back()->with('fail', 'Failed to send OTP: ' . $e->getMessage());
        // }
    
        // Session()->put('otp_user_id', $user->id);
        // return redirect()->route('otp.form');
    
    
    
    



    // public function verifyOtp(Request $request)
    // {
    //     $request->validate([
    //         'otp' => 'required|numeric',
    //     ]);
    
    //     $userId = session('otp_user_id');
    //     $user = User::find($userId);
    
    //     if (!$user) {
    //         return back()->with('fail', 'User not found.');
    //     }
    
    //     if ($user->otp == $request->otp) {
    //         $user->is_verified = true;
    //         $user->otp = null; // Make sure DB allows NULL, or use '' instead
    //         $user->save();
    
    //         Auth::login($user);
    
    //         switch ($user->role) {
    //             case 'admin':
    //                 return redirect('admin/dashboard');
    //             case 'teacher':
    //                 return redirect()->route('teacher/dashboard');
    //             default:
    //                 return redirect()->route('dashboard');
    //         }
    //     }
    
    //     return back()->with('fail', 'Invalid OTP');
    // }
    

  
public function loginUser(Request $request)
{
    
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return back()->with('fail', 'Invalid email or password.');
    }

    $roleName = $user->roles()->value('role_name');

    if ($roleName !== 'admin' && $user->is_approve != 1) {
        return back()->with('fail', 'Your account is not approved by admin yet.');
    }

   
    Auth::login($user);

  
    switch ($roleName) {
        case 'admin':
            return redirect('/admin/admin'); 
        case 'farmer':     
            return redirect('/farmer');
        case 'consultant':
            return redirect('/consultant');
        case 'academics':
            return redirect('/academics');
        default:
            return redirect('/dashboard');
    }
}



    // public function dashboard1()
    // {
    //     $data = Auth::user();

    //     if (Session::has('loginId')) {
    //         $data = User::where('id', '=', Session::get('loginId'))->first();
    //     }

    //     return view('dashboard', compact('data'));
    // }


    // Admin view


public function adminDashboard()
{
    
    $user = Auth::user();
    //dd($user);
   if (!Auth::user()->roles->contains(function ($role) {
    return strtolower($role->role_name) === 'admin';
    })) {
    return redirect('/login')->with('fail', 'Access denied. Admins only.');
}


    $users = User::all(); // Fetch all the  users

    if ($users->isEmpty()) {
        return view('admin')->with('message', 'No users found');
    }

    return view('admin', compact('users'));
}
    
public function approveUser($id)
{
    
    $users = User::find($id);

    if (!$users) {
        return redirect()->back()->with('error', 'User not found.');
    }

    $users->is_approve = 1;
    $users->save();

    return redirect('admin/table')->with('success', 'User approved successfully.');
}


public function rejectUser($id)
{
    $user = User::find($id);

    if (!$user) {
        return redirect()->back()->with('error', 'User not found.');
    }

    // Mark user as rejected (but don't delete)
    $user->is_approve = 2;
    $user->save();

    return redirect()->back()->with('success', 'User rejected successfully.');
}



public function showPendingUsers()
{
     $users = User::where('is_approve', 0)->latest()->paginate(5);
    return view('admin.pending-users', compact('users')); // better to use a specific view
}



    // Teacher view
    public function farmerDashboard()
    {
        
        return view('farmer');
    }
     public function  academicsDashboard()
    {
        // $data = Auth::user();
        return view('academics');
    }
   public function   consultantDashboard()
    {
        // $data = Auth::user();
        return view('consultant');
    }

   

    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->flush();
        $data['countries'] = Country::all();
        $data['categories'] = Category::all();
        $data['postTypes'] = PostType::all();

    $postImages = Post::with(['images', 'user']) 
        ->where('active', 1)
        ->latest()
        ->take(4)
        ->get()
        ->toArray();
    return view('welcome', $data, compact('postImages'));  
    }

    


    public function dashboard1()
{
    
   
     return view('welcome');
 }

public function dashboard()
{
  
    return view('admin.dashboard');
}


public function table()
{
    if (auth()->check()) {
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('table', compact('users'));
    }

    return redirect()->route('login')->with('error', 'You must be logged in to view this page.');
}




// public function forgotPasswordForm(){
  
//     return view("auth.forgotPasswordForm");

// }

                
// public function forgotPasswordFormPost(Request $request){

   
//         $request->validate([
//             "email"=>"required|email|exists:users"
//         ]);
   
//         $token = Str::random(65);

//         DB::table("password_forgot")->insert([
//             "email"=>$request->email,
//             "token"=>$token,
//             "created_at"=>now(),
//             "updated_at"=>now(),

//         ]);
       
//         Mail::send("emails.forgotPassword",["token"=>$token],function($message) use($request){
           
//             $message->to($request->email);
//             $message->subject("Forgot Password");

//         });
//        return redirect()->route("login")->with("success","we have sent email for reset password");
// }


// public function showLinkForm($token){


// return view("auth.forgotPasswordLinkForm",compact("token"));

// }

// public function resetPassword(Request $request){

//     $request->validate([
//         "email"=>"required|email|exists:users",
//         "password"=>"required|confirmed",
//     ]);
//     $first =DB::table("password_forgot")->where("email",$request->email)
//             ->where("token",$request->token)
//             ->first();
//             if(is_null($first)){
//                 return back()->with("error","somthing is wrong");
//             }
//             $user = User::where("email",$request->email)->first();
//             $user->password=Hash::make($request->password);
//             $user->save();
            
//             DB::table("password_forgot")->where("email",$request->email)
//             ->where("token",$request->token)
//             ->delete();

//             return redirect()->route('login')->with("success","Reset password");

// }

// public function showOtpPage()
// {
//     return view('auth.verify-otp');
// }

// public function profile(){

//     return view('profile');
// }


     public function getStates($country_id)
    {
        
        return State::where('country_id_fk', $country_id)->get();
    }

    public function getCities($state_id)
    {
        return City::where('state_id_fk', $state_id)->get();
    }


    //reject ones\
public function showRejectedUsers()
{
   
    $rejectedUsers = User::where('is_approve', 2)->get();


    return view('admin.rejected-users', compact('rejectedUsers'));
    }

    public function showAprrovedUsers()
    {
    
        $approveUsers = User::where('is_approve', 1)->get();

    return view('admin.approved-users', compact('approveUsers'));
    }   
   
public function category()
{
   
    return view('admin.category'); 
}

public function createCategory()
{
   
    return view('admin.category_create'); 
}


public function storeCategory(Request $request)
{
    $request->validate([
        'categoryName' => 'required|string|max:255',
        'categoryImg' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imagePath = null;

    if ($request->hasFile('categoryImg')) {
        $imagePath = $request->file('categoryImg')->store('categories', 'public');
    }

    Category::create([
        'user_id' => Auth::id(),
        'categoryName' => $request->categoryName,
        'categoryImg' => $imagePath,
    ]);

    return redirect()->back()->with('success', 'Category created successfully!');
}


// sub category
public function createSubCategory()
{
   
    $categories = Category::all(); 
    return view('admin.subcategory_create', compact('categories'));
}

public function storeSubCategory(Request $request)
{
    $request->validate([
        'category_id' => 'required|exists:category,id',
        'post_name' => 'required|string|max:255',
    ]);

    SubCategory::create([
        'category_id' => $request->category_id,
        'post_name' => $request->post_name,
    ]);

    return redirect()->back()->with('success', 'Post (Subcategory) created successfully!');
}

public function thread(){
    dd("posts");
    return view('posts');

}


}