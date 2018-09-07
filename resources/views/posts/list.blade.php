@extends('layouts.admin')

@section('title')
    Post List
@stop

@section('content')
    <div class="row">
        @if(Session::has('errorMessage'))
            <div class="alert alert-danger">
                {{ Session::get('errorMessage') }}
            </div>
        @endif
        <h1>Post List</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Excerpt</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td><a href="{{ $post->url }}" target="_blank">{{ $post->title }}</a></td>
                    <td>{{ $post->excerpt }}</td>
                    <td><a href="{{ $post->edit_url }}">Edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $posts->links()  !!}
    </div>
@stop
