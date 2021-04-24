<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){

        //SELECT * FROM comments;
        $comments = Comment::all();

        return view('welcome', compact('comments'));
    }

    public function store(Request $request){

        //INSERT INTO comments (title,description) VALUES ('$request->title', '$request->description');
        $comment = Comment::create(request()->all());

        return back();
    }

    public function delete($comment){

        //DELETE FROM comments WHERE id = '$comment';
        $deleteComment = Comment::findOrFail($comment)->delete();

        return back();
    }

    public function edit($comment){

        //SELECT * FROM comments WHERE id = '$comment';
        $getComment = Comment::findOrFail($comment);

        return view('update', compact('getComment'));
    }

    public function update($comment, Request $request){

        //UPDATE comments SET title = '$request->title', description = '$request->description' WHERe id = '$comment';
        $comment = Comment::find($comment)->update(request()->all());

        return redirect()->route('comment');
    }
}
