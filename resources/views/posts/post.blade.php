@extends('layouts.app')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col col-md-8">
            <h1 class="my-5">{{$post->title}}</h1>
            <img width="100%" src="{{$post->path_to_image}}" alt="post image">
            <p class="mt-4">{{$post->content}}</p>
            <span>Autor: {{$author}}</span>
        </div>
    </div>
</div>

@endsection