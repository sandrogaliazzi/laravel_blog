@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($posts as $post)
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$post->title}}</div>
                    <img src="{{$post->path_to_image}}" class="card-img-top">
                    <div class="card-body">
                        <p>{{$post->content}}</p>
                        <a href="{{route('post.get', $post->id)}}" class="btn btn-primary">Ler post</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection