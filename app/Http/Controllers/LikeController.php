<?php

namespace App\Http\Controllers;
  use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{


public function like(Request $request, $postId)
{
    $userId = auth()->id();

    // Check kando like aahe ya na 
    $existingLike = Like::where('user_id', $userId)
                        ->where('post_id', $postId)
                        ->first();

    if ($existingLike) {
       
        $existingLike->delete();
    } else {
       
        Like::create([
            'user_id' => $userId,
            'post_id' => $postId,
            'is_like' => true, 
        ]);
    }

    return back();
}


// public function toggleLike(Request $request, $postId)
// {
   
//     $userId = auth()->id();

//     $like = Like::where('user_id', $userId)
//                 ->where('post_id', $postId)
//                 ->first();

//     if ($like) {
//         $like->delete(); 
//     } else {
//         Like::create([
//             'user_id' => $userId,
//             'post_id' => $postId,
//             'is_like' => true,
//         ]);
//     }

//     return redirect()->back(); // Go back to the same page
// }


}