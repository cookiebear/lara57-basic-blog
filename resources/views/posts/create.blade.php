@extends('layouts.master')

@section('content')
<div class="blog-post">
    
    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">제목</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="제목">
        </div>
        <div class="form-group">
            <label for="body">내용</label>
            <textarea class="form-control" name="body" id="body" cols="30" placeholder="내용"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">등록</button>
    </form>
    
</div>
@endsection