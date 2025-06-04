<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Post;
use App\Models\PostType;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{

public function welcome()
{

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

public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    
    session()->flash('showLoginModal', true);

    
    return redirect()->route('home');
}

 
// public function welcome()
// {
//     $categories = Category::all();
//     $postTypes = PostType::all();
//     $postImages = Post::with(['images', 'user'])
//     ->where('active', 1)
//     ->latest()
//     ->take(4)
//     ->get()
//     ->toArray(); 


//     return view('welcome', compact('categories', 'postTypes', 'postImages'));
// }


public function create()
{
    $categories = Category::all();
    $postTypes = PostType::all();
    return view('posts.create', compact('categories', 'postTypes'));
}


public function getSubcategories($category_id)
{
    $subcategories = \App\Models\Subcategory::where('category_id', $category_id)->get();

    return response()->json($subcategories);
}


public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'summary' => 'required',
        'description' => 'required',
    ]);

    // Get the current user's role
    $roleName = Auth::user()->roles()->value('role_name');

    // If farmer, force inactive (0), else use request
    $active = ($roleName === 'farmer') ? 0 : ($request->has('active') ? $request->active : 0);

    // Create the post
    $post = Post::create([
        'title' => $request->title,
        'summary' => $request->summary,
        'description' => $request->description,
        'active' => $active,
        'post_type_id' => $request->post_type_id,
        'user_id' => Auth::id(),
    ]);

    // Handle images (if any)
   if ($request->hasFile('imgName')) {
    foreach ($request->file('imgName') as $file) {

        // Store file in 'public/post_images' folder
        $path = $file->store('post_images', 'public');

        // Extract details
        $filename = pathinfo($path, PATHINFO_FILENAME); // stored file name without extension
        $extension = $file->getClientOriginalExtension(); // e.g. 'jpg', 'pdf'
        $mimeType = $file->getClientMimeType(); // e.g. 'image/jpeg' or 'application/pdf'
        $originalName = $file->getClientOriginalName(); // optional: full original file name

        // Create image/file record
        $image = Image::create([
            'img_name'    => $filename,
            'extension'   => $extension,
            'mime_type'   => $mimeType,
            'file_name'   => $originalName, // optional, good for display
        ]);

        // Insert into pivot table
        DB::table('images_brige')->insert([
            'post_id'    => $post->post_id,
            'images_id'  => $image->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}


    return redirect()->route('posts.create')->with('success', 'Post created successfully!');
}



   public function index()
{
    
    $posts = Post::with(['user', 'subcategories.category'])->latest()->paginate(10); // paginate(10) = 10 posts per page
    return view('posts.index', compact('posts'));
}

    
  public function knowledgeBase()
{
    $posts = Post::with(['user', 'subcategories.category'])
                ->where('post_type_id', 1,2)
                ->paginate(10);

    // Get distinct users who authored knowledge base posts
    $users = User::whereHas('posts', function ($query) {
        $query->where('post_type_id', 1,2);
    })->get();

    return view('posts.knowledgeBase', compact('posts', 'users'));
}


// public function Discussion()
// {
//     $posts = Post::with(['user', 'subcategories.category'])
//                 ->where('post_type_id', 1)
//                 ->latest()
//                 ->paginate(10);

//     // Get distinct users who authored discussion posts
//     $users = User::whereHas('posts', function ($query) {
//         $query->where('post_type_id', 1);
//     })->get();

//     return view('posts.discussion', compact('posts', 'users'));
// }


    public function toggleStatus($post_id)
    {
        $post = Post::findOrFail($post_id);
        $post->active = !$post->active;
        $post->save();

        return redirect()->back()->with('msg', 'Post status updated successfully!');
    }
public function show(Post $post)
{
    $categories = Category::all();
    dd($post);
    // Eager load relationships for the specific post
    $post->load(['user', 'subcategories.category', 'images', 'likes.user']);

    return view('posts.show', compact('post', 'categories'));
}



    public function edit($id)
    {
        $posts = Post::all();
        $post = Post::with('user', 'subcategories')->findOrFail($id);
        return view('posts.update', compact('post','posts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'summary'     => 'required|string|max:500',
            'description' => 'required|string',
            'active'      => 'required|boolean',
           
        ]);

        $post = Post::findOrFail($id);

        $post->title       = $request->input('title');
        $post->summary     = $request->input('summary');
        $post->description = $request->input('description');
        $post->active      = $request->input('active');
       

        $post->save();

        return redirect()->route('posts.knowLedgeBase')->with('success', 'Post updated successfully!');
    }

 


public function postsByAuthor($id)
{
    $author = User::findOrFail($id); // Find the user by ID
    $posts = Post::where('user_id', $id)->paginate(10); // Get all posts by this author

    return view('posts.author_posts', compact('author', 'posts'));
}




}




