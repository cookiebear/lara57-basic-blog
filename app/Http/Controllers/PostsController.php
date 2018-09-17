<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
    public function index() {
        return view('posts.index');
    }

    public function show() {
        return view('posts.show');
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
        $post = new Post;

        // 1. 데이터 저장 기본 방법
        // $post->title = request('title');
        // $post->body = request('body');
        // $post->save();

        // 2. 데이터 자장 방법
        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

        // 3. 데이터 저장 방법
        // Post::create(request()->all());
        // Post::create(request(['title','body']));

        return redirect('/');

    }  
}
