<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\Likes;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function savePost(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => "required",
            'body' => "required",
            // "image" => "required",
        ]);

        $incomingFields['userID'] = Auth::user()->id;
        $incomingFields["title"] = strip_tags($incomingFields["title"]);
        $incomingFields["body"] = strip_tags($incomingFields["body"]);
        if ($request->hasFile('image')) {
            $destination_path = "public/images/posts";
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $incomingFields["image"] = $image_name;
        }
        Post::create($incomingFields);
        return redirect('/home');

    }
    public function showComments(Post $post)
    {
        $comments = $post->comment()->latest()->get();
        return view('comment', ['post' => $post, 'comments' => $comments]);

    }
    public function saveComment(Request $request, Post $post)
    {
        $incomingFields = $request->validate([
            'content' => 'required',
        ]);
        $incomingFields['content'] = strip_tags($incomingFields['content']);
        $incomingFields['postID'] = $post->id;
        $incomingFields['userID'] = Auth::user()->id;
        Comment::create($incomingFields);
        return redirect()->route('comments', ['post' => $post]);

    }
    public function addLike(Post $post ,Request $request){
        if ($post->likes()->where('userID', Auth::user()->id)->exists()) {
            // You might want to handle this scenario based on your application's requirements
            $post->likes()->where('userID', Auth::user()->id)->first()->delete();
            return redirect('/home');
        }
        $incomingFields = [
            'postID'=>$post->id,
            'userID'=>Auth::user()->id,
        ];
        Like::create($incomingFields);
        return redirect('/home');

    }
}
