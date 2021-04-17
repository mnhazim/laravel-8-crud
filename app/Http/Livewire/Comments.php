<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    public $comments;
    public $title, $description, $commentId;
    public $updateMode = false;

    public function addComment(){
        $createComment = Comment::create([
            'title' => $this->title,
            'description' => $this->description
        ]);
        $this->comments->prepend($createComment);
        $this->title = "";
        $this->description = "";
    }

    public function updateComment(){
        $updateComment = Comment::find($this->commentId);
        $updateComment->title = $this->title;
        $updateComment->description = $this->description;
        $updateComment->save();

        return redirect()->route('livewire');
    }

    public function mount(){
        $getComments = Comment::all();
        $this->comments = $getComments;
    }

    public function edit($id){
        $this->updateMode = true;
        $comment = Comment::find($id);
        $this->title = $comment->title;
        $this->description = $comment->description;
        $this->commentId = $comment->id;
    }

    public function delete($id){
        $comment = Comment::find($id);
        $comment->delete();
        $this->comments = $this->comments->except($id);
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
