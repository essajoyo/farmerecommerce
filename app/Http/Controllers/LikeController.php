<?php

namespace App\Http\Controllers;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{


public function toggleLike($postId)
{
    
   

    $userId = auth()->id(); 

    if (!$userId) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    $post = Post::findOrFail($postId);

    $like = $post->likes()->where('user_id', $userId)->first();

    if ($like) {
        $like->delete();
    } else {
        $post->likes()->create(['user_id' => $userId]);
    }

    $likes = $post->likes()->with('user')->get();
    $likedNames = $likes->pluck('user.name')->toArray();

       return redirect()->back()->with('success', 'Post like status updated.');

}



}