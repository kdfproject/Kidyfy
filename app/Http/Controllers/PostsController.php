<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostsController extends Controller
{
    public function store(Request $request)

    {
       Post::create([
            'post_text' => $request['post_text'],
            'user_id' => Auth::user()->id,
            'visitor' => $request->ip,

        ]);

        return view('home');
    }


    public function AllPosts(Auth $user, Post $post){
        $posts = $post->where("user_id", "=", $user->id)->get();
        return view('home' , compact('posts'));
}
}
