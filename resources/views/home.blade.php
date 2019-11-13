@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($posts->sortByDesc('created_at') as $post)
        <div class="col-md-8">
            <div class="card shadow rounded-lg my-4">
                <img src="{{asset('storage/'.$post->path_to_image)}}" class="card-img-top">
                <div class="card-body">
                    <div class="card-title">
                        <h5>{{$post->title}}</h5>
                    </div>
                    <div class="card-text">
                        <p>{{ Str::limit($post->content, 150) }}</p>
                    </div>
                    <a href="{{route('post.get', $post->id)}}" class="btn btn-primary">Ler post</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection