<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();

        return view('welcome', compact('comments'));
    }

    public function store(Request $request){
        $comment = Comment::create(request()->all());

        return back();
    }

    public function delete($comment){
        $deleteComment = Comment::findOrFail($comment)->delete();

        return back();
    }

    public function edit($comment){
        $getComment = Comment::find($comment);

        return view('update', compact('getComment'));
    }

    public function update($comment, Request $request){
        $comment = Comment::find($comment)->update(request()->all());

        return redirect()->route('comment');
    }
}
