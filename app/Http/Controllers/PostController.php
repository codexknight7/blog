<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct(){
        // you must be signed it in order to create a post
        // all methods are locked out except index and show
        $this->middleware('auth')->except('index','show');
    }
    public function index(){

        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();
            
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // validate the form before saving
        // stores the validation errors inside an array called $errors,
        // you have to place it on the form page to show the errors. 
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new Post;

        $post->title = request('title');
        $post->body = request('body');
        $post->user_id = auth()->id();

        $post->save();

        return redirect('/posts ');
    }



}
