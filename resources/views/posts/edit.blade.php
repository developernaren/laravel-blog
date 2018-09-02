@extends('layouts.admin')

@section('title')
    Update Post
@stop
@section('content')
    <div class="row">
        <h1>Update Post</h1>
        <form action="{{ route('posts.update', $post->slug) }}" class="form" method="post">
            {{ csrf_field() }}
            <div class="form-group @if($errors->has('title')) has-error @endif">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="{{ old('title', $post->title) }}">
                <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <div class="form-group @if($errors->has('content')) has-error @endif">
                <label>Content</label>
                <textarea class="form-control" name="content" cols="3" rows="5">{{ old('content', $post->content) }}</textarea>
                <span class="text-danger">{{ $errors->first('content') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Save</button>
            </div>

        </form>
    </div>
@stop
