@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col col-md-10">
            <a href="{{route('post.create')}}" class="btn btn-primary d-block my-5">Novo Post</a>
            <h2 class="my-4">Posts</h2>
            @if(count($posts) == 0)
            <h3>você ainda não possui nenhum post!</h3>
            <a href="{{route('post.create')}}" class="btn btn-primary">Novo post</a>
            @else
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">ver post</th>
                        <th scope="col">Comentários</th>
                        <th scope="col">Editar/Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>
                            <a href="{{route('post.get', $post->id)}}" class="btn btn-primary">Ler post</a>
                        </td>
                        <td>{{count($post->coments)}}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn" data-toggle="dropdown" aria-expanded="false">
                                    <i class="material-icons">more_horiz</i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{route('post.edit', $post->id)}}" id="btnEdit" style="cursor:pointer"
                                        class="dropdown-item">
                                        <i class="material-icons">create</i> Editar
                                    </a>
                                    <a href="{{route('post.destroy', $post->id)}}" class="dropdown-item btnDelete">
                                        <i class="material-icons">delete</i> Excluir
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-md-8">
            @if(Session::has('deleteMessage'))
                <div role="alert" class="alert alert-success">
                    {{Session::get('deleteMessage')}}
                </div>
            @endif    
        </div>
    </div>
</div>
<script>
    $(function(){
        $('.btnDelete').click(()=>{
            if(!confirm('deseja excluir este post permanentemente?'))
                return false;
        })
    })
</script>
@endsection