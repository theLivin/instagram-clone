<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\User;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image']
        ]);

        //dd(request('image')->store('uploads','local'));   //saves to root of storage dir
        //dd(request('image')->store('uploads','s3'));      //saves to amazon s3   
        //dd(request('image')->store('uploads','public'));    //saves to storage/public dir

        $imgPath = request('image')->store('uploads','public');
        
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imgPath
        ]);

        //dd(request()->all());

        return redirect('/profile/'.auth()->user()->id);
    }

    public function show(Post $post){
        //dd($post);
        return view('posts.show',compact('post'));
    }

    public function index(){
        $users = auth()->user()->following()->pluck('profiles.user_id');

        //dd($users);

        $posts = Post::whereIn('user_id',$users)->with('user')->latest()->paginate(15);

        return view('posts.index',[
            'posts'=>$posts
        ]);
    }
}