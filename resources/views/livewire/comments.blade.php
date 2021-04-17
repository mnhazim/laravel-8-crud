<div class="row">
    <div class="col-lg-8 mx-auto mt-4">
        <div class="card">
            <div class="card-body">
                @if($updateMode)
                <form method="post" wire:submit.prevent="updateComment">
                    <div class="form-group mb-2">
                        <label ><h3>Comment</h3></label>
                        <input type="text" wire:model.lazy="title" class="form-control" placeholder="Your Title..">
                    </div>
                    <div class="form-group  mb-2">
                        <input type="text" wire:model.lazy="description" class="form-control" placeholder="Description..">
                    </div>
                    <input type="hidden" wire:model="commentId">
                    <button type="submit" class="btn btn-warning btn-sm">Update</button>
                </form>
                @else 
                <form method="post" wire:submit.prevent="addComment">
                    <div class="form-group mb-2">
                        <label ><h3>Comment</h3></label>
                        <input type="text" wire:model.lazy="title" class="form-control" placeholder="Your Title..">
                    </div>
                    <div class="form-group  mb-2">
                        <input type="text" wire:model.lazy="description" class="form-control" placeholder="Description..">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
                @endif
                
            </div>
        </div>
    </div>
    <div class="col-lg-8 mx-auto">
        @foreach($comments as $comment)
        <div class="card my-2">
            <div class="card-body">
                <h5 class="card-title">{{ $comment->title }}</h5>
                <p class="card-text">{{ $comment->description }}</p>
                <a href="#" class="btn btn-danger btn-sm" wire:click="delete({{ $comment->id }})">Delete</a>
                <a href="#" class="btn btn-info btn-sm" wire:click="edit({{ $comment->id }})">Update</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
