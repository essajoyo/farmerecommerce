<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Middleware\SessionAuth;
 use App\Http\Controllers\PostController;

use App\Http\Controllers\LikeController;

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/', [CustomAuthController::class, 'registration']);
//Route::get('/', [PostController::class, 'show']);
Route::get('/', [PostController::class, 'welcome']);

Route::get('/get-subcategories/{category_id}', [PostController::class, 'getSubcategories']);

Route::get('/user/{id}/edit', [CustomAuthController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [CustomAuthController::class, 'update'])->name('user.update');


//pendding users
Route::get('/admin/pending-users', [CustomAuthController::class, 'showPendingUsers'])->name('admin.pending.users')->middleware('auth');



Route::get('/admin/rejected-users', [CustomAuthController::class, 'showRejectedUsers'])->name('admin.reject-user');
Route::get('/admin/approved-users', [CustomAuthController::class, 'showAprrovedUsers'])->name('admin.approved-users');
//img


Route::get('admin', [CustomAuthController::class, 'adminDashboard'])->name('admin');
//Route::get('/admin',[CustomAuthController::class, 'adminDashboard'])->middleware(SessionAuth::class);

// Route for the admin dashboard
Route::get('/admin/dashboard', [CustomAuthController::class, 'adminDashboard'])->name('admin.dashboard');

// Route for approving a user
// Route::post('/admin/approve-user/{id}', [CustomAuthController::class, 'approveUser'])->name('admin.user.approve');

// // Route for rejecting a user 
// Route::post('/admin/user/reject/{id}', [CustomAuthController::class, 'rejectUser'])->name('admin.user.reject');
 //Route::post('/admin/approve-user/{id}', [CustomAuthController::class, 'approveUser'])->name('admin.user.approve');


Route::get('password/forgot', [CustomAuthController::class, 'forgotPasswordForm'])->name('password.forgot');
Route::post('password/forgot', [CustomAuthController::class, 'forgotPasswordFormPost'])->name('password.forgot.post');
Route::get('password/forgot/{token}', [CustomAuthController::class, 'showLinkForm'])->name('password.forgot.link');
Route::post('password/forgot/submit', [CustomAuthController::class, 'resetPassword'])->name('password.forgot.link.submit');

//otp
Route::post('register', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('verify-otp', [CustomAuthController::class, 'verifyOtp'])->name('verify-otp');
Route::get('/sendsms', [CustomAuthController::class, 'sendsms']);
Route::get('/otp', function () {
    return view('auth.otp'); 
})->name('otp.form');

Route::post('/otp/verify', [CustomAuthController::class, 'verifyOtp'])->name('verify-otp');


Route::get('/get-states/{country_id}', [CustomAuthController::class, 'getStates']);
Route::get('/get-cities/{state_id}', [CustomAuthController::class, 'getCities']);


//google login
Route::get('/googleLogin', [CustomAuthController::class, 'googleLogin']);
Route::get('/auth/google/callback', [CustomAuthController::class, 'googleHandle']);


//facebook
Route::get('/facebookLogin', [CustomAuthController::class, 'facebookLogin']);
Route::get('/auth/facebook/callback', [CustomAuthController::class, 'handleFacebookCallback']);
Route::get('register', [CustomAuthController::class, 'register']);

Route::get('login', [CustomAuthController::class, 'login'])->name('login');
Route::get('/registration', [CustomAuthController::class, 'registration'])->name('registration');
Route::post('/registration-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');


Route::post('/logout', [CustomAuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('farmer', [CustomAuthController::class, 'farmerDashboard'])->name('farmer.dashboard');
Route::get('academics', [CustomAuthController::class, 'academicsDashboard'])->name('academics.dashboard');
Route::get('consultant', [CustomAuthController::class, 'consultantDashboard'])->name('consultant.dashboard');
Route::get('/dashboard', [CustomAuthController::class, 'dashboard1'])->name('user.dashboard');

//Route::get('category', [CustomAuthController::class, 'category'])->name('admin.category');


Route::middleware(['auth'])->group(function () {

Route::get('/admin/admin', [CustomAuthController::class, 'adminDashboard'])
    ->middleware(['auth', 'admin']);

//profile
Route::get('/admin/profile', [CustomAuthController::class, 'profile'])->name('profile');
Route::post('/admin/profile/{id}', [CustomAuthController::class, 'viewProfile'])->name('profile.post');



// Route for approving a user
Route::post('/admin/user/approve/{id}', [CustomAuthController::class, 'approveUser'])->name('admin.user.approve');

// Route for rejecting a user 
Route::post('/admin/user/reject/{id}', [CustomAuthController::class, 'rejectUser'])->name('admin.user.reject');

//Route::get('category', [CustomAuthController::class, 'category'])->name('category.dasboard');

    
    
    // farmer Dashboard Route
   
    //academics
    
    Route::prefix('admin')->group(function () {
       

        Route::get('dashboard', [CustomAuthController::class, 'adminDashboard'])
        ->middleware('auth');  

        // Academic Year Routes
        Route::get('academic-year/create', [AcademicYearController::class, 'index'])->name('academic-year.create');
        Route::post('academic-year/store', [AcademicYearController::class, 'store'])->name('academic-year.store');
        Route::get('academic-year/read', [AcademicYearController::class, 'read'])->name('academic-year.read');

        // Class Management Routes
        Route::get('class/create', [ClassesController::class, 'index'])->name('class.create');
        // Route::post('class/store', [ClassesController::class, 'store'])->name('class.store');
         Route::post('/', [ClassesController::class, 'store']);
        Route::get('class/read', [ClassesController::class, 'read'])->name('class.read');

        Route::get('category', [CustomAuthController::class, 'category'])->name('admin.category');
      //  Route::get('category/create', [CustomAuthController::class, 'createSubCategory'])->name('admin.createSubCategory');


        //table
        Route::get('table', [CustomAuthController::class, 'table'])->name('table');

        Route::get('profile', [CustomAuthController::class, 'profile'])->name('profile');
        //categroy create
    

Route::middleware('auth')->group(function () {

Route::get('/category/create', [CustomAuthController::class, 'createCategory'])->name('category.create');
Route::post('/category/store', [CustomAuthController::class, 'storeCategory'])->name('category.store');



});
Route::middleware('auth')->group(function () {
    Route::get('/subcategory/create', [CustomAuthController::class, 'createSubCategory'])->name('admin.subcategory_create');
    Route::post('/subcategory/store', [CustomAuthController::class, 'storeSubCategory'])->name('admin.subcategory_store');

});


        
Route::get('/get-states/{country_id}', [CustomAuthController::class, 'getStates']);
Route::get('/get-cities/{state_id}', [CustomAuthController::class, 'getCities']);

 Route::get('admin', [CustomAuthController::class, 'adminDashboard'])->name('admin');
      Route::middleware(['auth'])->group(function () {

    // AJAX: Get subcategories by category_id
    Route::get('/get-subcategories/{category_id}', [PostController::class, 'getSubcategories'])->name('get.subcategories');

    // Post Routes
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');      
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); 
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/knowledge-base', [PostController::class, 'knowledgeBase'])->name('posts.knowLedgeBase');
    Route::get('/discussion', [PostController::class, 'Discussion'])->name('posts.discussion');

    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

    Route::get('/', [PostController::class, 'show'])->name('posts.show'); // Details view
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update'); // Save 
 
    Route::post('admin/posts/{post}/like', [PostController::class, 'like'])->name('posts.like');
    
   // Route::patch('/posts/{post}/toggle-status', [PostController::class, 'toggleStatus'])->name('posts.toggleStatus'); 
        Route::get('/posts/toggle-status/{post_id}', [PostController::class, 'toggleStatus'])->name('posts.toggle_status');

        Route::post('/admin/posts/{post}/like}', [LikeController::class, 'like'])->name('posts.like');

        Route::post('/post/{id}/like', [LikeController::class, 'toggleLike'])->name('post.like');




});
       
    });




});
