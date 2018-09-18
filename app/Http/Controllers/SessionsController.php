<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }
    
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // 1. attempt to authenticate the user
        // 2. 인증 실패 시 redirect back
        // 3. 인증 성공 시 로그인
        // 4. redirect to the home page.

        if (! auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => '비밀번호를 다시 확인해 주세요.'
            ]);
        }

        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
