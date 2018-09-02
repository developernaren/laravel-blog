@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>{{ $post->title }}</h1>
        <div>
            <p>{{ $post->content }}</p>
        </div>
    </div>
@stop
