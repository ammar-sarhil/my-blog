<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $allposts =[
            ['id' =>1 , 'title'=>'php','posted_by' =>'ammar','created_at' =>'2024-14-8 09:00:00'],
            ['id' =>2 , 'title'=>'html','posted_by' =>'haidar','created_at' =>'2024-14-8 09:00:00'],
            ['id' =>3 , 'title'=>'js','posted_by' =>'basel','created_at' =>'2024-14-8 09:00:00'],
            ['id' =>4 , 'title'=>'css','posted_by' =>'mekdad','created_at' =>'2024-14-8 09:00:00']
        ];
        return view('home', ['posts' =>$allposts]);
    }
    public function show($postId)
    {   
        $singlePost = [
            'id' =>1 , 'title'=>'php','description'=> 'this is description','posted_by' =>'ammar','created_at' =>'2024-14-8 09:00:00'
        ];
        return view('show', ['post' => $singlePost]);
    }
    public function create(){
        return view('create');
    }

    public function store() {
        // $request = request();
        // dd($request);
        $data = request()->all();
        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;
        // dd ($data);
        return to_route ('posts.index');
    }
    public function edit(){
        return view('edit');
    }
    public function update(){
        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;
        // dd ($title);

        return to_route ('posts.show', 1);
    }

    public function destroy(){
        return to_route('posts.index');
    }
}
