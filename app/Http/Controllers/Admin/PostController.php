<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){

        $posts = Post::orderBy('id');
        $q=request()->get("q")??"";
        $published=request()->get("published"); 


        if($q){
            $posts->where('title','like',"%{$q}%");
        }
        if (isset($published)){

            $posts->where('published' , $published);
        }
    
        $posts = $Post->where('published','=','1')->paginate(5)->appends(["q"=>$q,"published"=>$published]);

        return view('admin.post.index')->withPosts($posts);
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(){

        $request['published'] = $request->get('published')?1:0 ;
        Post::create($request->all());
        session()->flash('msg' , 's: comment created successfully');
        return redirect(route('posts.index'));
    }

    public function show(Post $post)
    {
        $posts = Comment::find($post->id);
        return view('admin.post.show')->with('posts' , $posts);
    }
    public function edit($id)
    {

        $posts = Post::find($id);
        if (!$posts){
            session()->flash('msg' , 'w: post not found');
            return redirect(route('posts.index'));
        }
        return view('admin.post.edit')->with('posts' , $posts);
    }

    public function destroy($id)
    {
        $posts = Post::find($id);
        if(!$posts){
            Session()->flash('msg','post not found');
            return redirect(route('posts.index'));
        }
        Post::destroy($id);
        session()->flash("msg", "s:  posts Deleted Successfully");
        return redirect(route("posts.index"));
    }
}

