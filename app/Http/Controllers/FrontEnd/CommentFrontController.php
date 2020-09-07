<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentsRequest;

class CommentFrontController extends Controller
{
    public function storeComment(CommentsRequest $request, $id)
    {
        $post = Post::find($id);
        $data = $request->all();
        Comment::create($data);
        Session::flash('msg','s:Added Successfuly...');
        return redirect()->back();
    }
}
