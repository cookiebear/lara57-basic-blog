<?php

namespace App\Http\Controllers;

use App\Post;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index() {
        // $posts = Post::all();
        // $posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
        // $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store()
    {
        
        // 1. request data를 이용한 새로운 Post 생성
        // 2. 데이터 저장
        
        // 3. post 리스트 페이지 redirect

        // dd(request()->all());

        // 서버사이드 validation
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title','body']))
        );
        // 1. 데이터 저장 기본 방법
        // $post->title = request('title');
        // $post->body = request('body');
        // $post->save();

        // 2. 데이터 자장 방법
        // Post::create([
        //     'title' => request('title'),
        //     'body' => request('body'),
        //     'user_id' => auth()->id()
        // ]);

        // 3. 데이터 저장 방법
        // Post::create(request()->all());
        // Post::create(request(['title','body']));

        return redirect('/posts');

    }  
}
