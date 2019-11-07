@extends('layouts.app')
@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col col-md-8">
            <h1>welcome to your dashboard</h1>
            <h2 class="my-4">Posts</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">ver post</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>
                            <a href="{{route('post.get', $post->id)}}" class="btn btn-primary">Ler post</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection