@extends('master')

@section('section-body')
<div class="row">
    <div class="col-lg-8 mx-auto mt-4">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('updateComment', ['comment' => $getComment->id]) }}" method="post">
                    @csrf
                    <div class="form-group  mb-2">
                        <label ><h3>Update Comment</h3></label>
                        <input type="text" name="title" class="form-control" value="{{ $getComment->title }}" placeholder="Your Title..">
                    </div>
                    <div class="form-group  mb-2">
                        <input type="text" name="description" class="form-control" value="{{ $getComment->description }}" placeholder="Description..">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection