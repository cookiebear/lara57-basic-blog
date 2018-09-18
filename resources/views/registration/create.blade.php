@extends ('layouts.master')

@section('content')
    <form method="post" action="/register">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">이름:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">비밀번호</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">비밀번호 확</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">저장</button>
        </div>
        @include('layouts.errors')
    </form>
@endsection