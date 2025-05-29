<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Post;
use App\Models\PostType;
use App\Models\Image;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{

public function welcome()
{
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
        'active' => 'required|boolean',
        
       
    ]);

    $post = Post::create([
        'title' => $request->title,
        'summary' => $request->summary,
        'description' => $request->description,
        'active' => $request->active,
        'post_type_id' => $request->post_type_id,
        'user_id' => Auth::id(),
    ]);

  
    if ($request->hasFile('imgName')) {
    foreach ($request->file('imgName') as $file) {
        $path = $file->store('post_images', 'public'); 

        // Extract filename and extension
        $filename = pathinfo($path, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();

        // Save to images table
        $image = Image::create([
            'img_name' => $filename,
            'extension' => $extension,
        ]);

        // Save to images_brige table
        DB::table('images_brige')->insert([
            'post_id' => $post->post_id,
            'images_id' => $image->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}


    return redirect()->route('posts.create')->with('success', 'Post created successfully!');
}


    public function index()
    {
        dd("h");
    $posts = Post::with(['user', 'subcategories.category'])->latest()->get();
        return view('posts.index', compact('posts'));
    }

    //
    public function knowledgeBase()
    {
        $posts['subcategories'] = SubCategory::with('category')->get();
        $posts = Post::with(['user', 'subcategories.category'])
                ->where('post_type_id', 2) 
                ->paginate(10);


        return view('posts.knowledgeBase', compact('posts'));
    }

    public function Discussion()
    {
        $posts = Post::with(['user', 'subcategories.category'])
                    ->where('post_type_id', 1) 
                    ->latest()
                    ->paginate(10);

        return view('posts.discussion', compact('posts'));
    }

    public function toggleStatus($post_id)
    {
        $post = Post::findOrFail($post_id);
        $post->active = !$post->active;
        $post->save();

        return redirect()->back()->with('msg', 'Post status updated successfully!');
    }

    public function show(Post $post)
    {
        ;
        // $post->load(['subcategories', 'user']);
        $posts = Post::with(['user', 'subcategories.category'])->latest()->get();
       
    //   dd($post["id"]);
        return view('welcome', compact('post'));
    }


    public function edit($id)
    {
        $post = Post::with('user', 'subcategories')->findOrFail($id);
        return view('posts.update', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'summary'     => 'required|string|max:500',
            'description' => 'required|string',
            'active'      => 'required|boolean',
            'issue_date'  => 'required|date',
        ]);

        $post = Post::findOrFail($id);

        $post->title       = $request->input('title');
        $post->summary     = $request->input('summary');
        $post->description = $request->input('description');
        $post->active      = $request->input('active');
        $post->issue_date  = $request->input('issue_date');

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    public function like(Request $request, Post $post)
{
    dd($request);
    $user = auth()->user();

    $existing = $post->likes()->where('user_id', $user->id)->first();

    if ($existing) {
        $existing->delete(); // delete mana unlike
    } else {
        $post->likes()->create([
            'user_id' => $user->id,
            'is_like' => true
        ]);
    }

    return back();
}



}




