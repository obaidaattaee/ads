@extends("layouts.admin")
@section("title", "Manage Posts")


@section("content")

<form class="row mb-3">
    <div class="col-sm-4">
        <input autofocus value="{{ request()->get("q") }}" type="text" class="form-control"
                    placeholder="Enter Your Search" name="q"  />
    </div>

    <div class="col-sm-2">
        <select name="published" class="form-control">
        <option value='' > Anystatus</option>
        <option {{ request()->get("published")?"selected":""}} value='1' >active</option>
        <option {{ request()->get("published") == '0'?"selected":""}} value='0'>Inactive</option>
        </select>
    </div>

    <div class="col-sm-4">
        <button class='btn btn-primary'><i class='fa fa-search'></i> Search</button>
        <a href="{{ route("posts.create") }}" class='btn btn-success'><i class='fa fa-plus'></i>Create Room</a>
    </div>
</form>

<div class="table-scrollable">

@if($rooms->count()>0)

    <table align="center" class="table table-striped mt-3 table-bordered table-hover">
        <thead>
            <tr>
                <th>userID</th>
                <th>name</th>
                <th>Image</th>
                <th>description</th>
                <th>Published</th>
                <th width="20%"></th>
            </tr>
        </thead>
        <tbody>

            @foreach($posts as $post)
        <tr>
            <td>{{ $room->user_id}}</td>

            <td><a href="{{ route("post.show", $post->id) }}">{{ $post->name }}</a></td>

            <td><img width="100" src='{{ asset("storage/".$post->image)}}' ></td>


            <td>{{$post->description}}</td>

            <td><input type="checkbox" disabled {{$post->published?"checked":"" }}/></td>

            <td width="20%">
                <form method="post" action="{{ route('post.destroy', $post->id) }}">

                    <a href="{{ route("rooms.edit", $post->id) }}" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                    <a href="{{ route("delete-rooms", $post->id) }}" onclick='return confirm("Are you sure delete?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>

                    @csrf
                    @method("DELETE")

                </form>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
{{ $rooms->links() }}

@else

    <div class="alert alert-warning"> Sorry there is no result to your search </div>

@endif


@endsection


