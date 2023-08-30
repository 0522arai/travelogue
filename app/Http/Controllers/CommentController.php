<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
     public function store(Post $post, Comment $comment, CommentRequest $request)
    {
        $input = $request['comment'];
        $input['user_id'] = Auth::id();
        $input['post_id'] = $post->id;
        $comment->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function show(Comment $comment, Post $post)
    {
        return redirect('/posts/' . $post->id)->with(['comment'=>$comment]);
    }
    
    
    public function create()
    {
        return view('comments.create');
    }
    
    public function delete(Comment $comment, Post $post)
    {
        $post_id = $comment -> post_id;
        $comment->delete();
        return redirect('/posts/'.$post_id);
    }
    

    
}
