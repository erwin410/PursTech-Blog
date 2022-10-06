<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'content' => 'required|max:255',
        ]);
        $comment = new Comment();
        $comment->content = $validate['content'];
        $comment->user_id = $request->input('user_id');
        $comment->post_id = $request->input('post_id');
        // dd($comment);
        $comment->save();

        return redirect()->back();
    }

    public function destroy (Comment $comment) 
    {
        $comment->delete();

        return redirect()->back();
    }
}
