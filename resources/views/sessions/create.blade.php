@extends ('layouts.master')

@section('content')
    <h1>Sign in</h1>
    <form method="post" action="/login">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">비밀번호</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">로그인</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection