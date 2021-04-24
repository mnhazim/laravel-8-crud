@extends('master')

@section('section-body')
<div class="row">
    <div class="col-lg-6 mx-auto mt-4">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('addComment') }}" method="post">
                    @csrf
                    <div class="form-group  mb-2">
                        <label ><h3>Comment</h3></label>
                        <input type="text" name="title" class="form-control" placeholder="Your Title..">
                    </div>
                    <div class="form-group  mb-2">
                        <input type="text" name="description" class="form-control" placeholder="Description..">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mx-auto mt-3">
        @foreach($comments as $comment)
        <div class="card my-2">
            <div class="card-body">
                <h5 class="card-title">{{ $comment->title }}</h5>
                <p class="card-text">{{ $comment->description }}</p>
                <a href="{{ route('deleteComment', ['comment' => $comment->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                <a href="{{ route('editComment', ['comment' => $comment->id]) }}" class="btn btn-info btn-sm">Update</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection