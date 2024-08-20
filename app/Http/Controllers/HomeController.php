<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class HomeController extends Controller
{
    public function index()
    {
        $postsFromDB = Post::all();
        
        return view('home', ['posts' =>$postsFromDB]);
    }
    public function show($postId)
    {   
        $singlePostFromDB = Post::find($postId);
        
        return view('show', ['post' => $singlePostFromDB]);
        
    }
    public function create(){
        $users = User::all();
        return view('create' ,['users' => $users]);
    }

    public function store() {
        // $request = request();
        // dd($request);
        $data = request()->all();
        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;
        // dd ($data);
        $post=new Post;
        $post->title = $title;
        $post->description = $description;
        $post->user_id=$postCreator;
        $post->save();
        return to_route ('posts.index');
    }
    public function edit(Post $post){
        $users = User::all();
        return view('edit' , ['users' =>$users ,'post'=>$post]);
    }
    public function update( $postId){
        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;
        // dd ($title);
        $singlePostFromDB=Post::find($postId);
        $singlePostFromDB->update(['title'=>$title ,'description'=>$description,'user_id'=>$postCreator]);


        return to_route ('posts.show', $postId);
    }

    public function destroy($postId){
        $post =Post::find($postId);
        $post->delete();
        return to_route('posts.index');
    }
}
