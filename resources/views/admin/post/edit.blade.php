@extends("layouts.admin")

@section("title","Edit New Post")


@section("content")


    <form method="post" action="{{ route('posts.update' , $posts->id) }}" role="form">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">name</label>
                <input  type="text"  class="form-control" id="name" name="name" placeholder="Enter comment Name">
            </div>
            <div class="form-group">
                <label for="email">userID</label>
                <input  type="email"  class="form-control" id="userID" name="userID" placeholder="Enter userID">
            </div>
            <div class="form-group">
                <label for="website">description</label>
                <input  type="text"  class="form-control" id="description" name="description" placeholder="Enter description">
            </div>
            <div class="form-group">
                    <div class="form-group form-md-line-input has-success">
                        <input type="file" name="imageFile" class="form-control custom-file-input" id="form_control_1">
                        <label for="form_control_1">Image</label>
                    </div>
            </div>
            <div class="form-group">
                <input  type="checkbox"   id="published" name="published" >
                <label for="published">published</label>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class='btn btn-danger' href='{{route('posts.index')}}'>Cancel</a>
            </div>
        </div>
    </form>
@endsection