@extends('layouts.app')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col col-md-8">
            <h1 class="my-5">{{$post->title}}</h1>
            <img width="100%" src="{{$post->path_to_image}}" alt="post image">
            <p class="mt-4">{{$post->content}}</p>
            <span>Autor: {{$post->author->name}}</span>
        </div>
    </div>
    <div class="mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h5 class="card-header">comentários</h5>
                    <div class="card-body">
                        <form id="comentForm">
                            <div class="form-group">
                                <textarea type="text" id="content" class="form-control" rows="4"
                                    placeholder="deixe seu comentário"></textarea>
                                <input type="hidden" name="author_id"
                                    value="{{(Auth::check()) ? Auth::user()->id : ''}}">
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                            </div>
                            @if(Auth::check())
                                <button type="submit" class="btn btn-primary">Comentar</button>
                            @else
                                <a class="btn btn-primary" href="{{route('login')}}">Login</a>
                            @endif        
                        </form>
                        <div id="comentsContainer">
                            <!--@include('posts.coments')-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(()=>{
                loadComents({{$post->id}})
            })
    
            const loadComents = (id) =>{
                $.get(`http://localhost:8000/api/loadcoments/${id}`, response => {
                    $('#comentsContainer').html(response);
                });
            }
            
            $.fn.editComent = (id) =>{
                event.preventDefault();
                const content = $(`#coment${id} p`).text();

                $.post('http://localhost:8000/api/editComent', {
                    content: content,
                    id: id
                }, (response)=>{
                    $(`#coment${id}`).html(response);
                    
                });
            }

            $.fn.deleteComent = (id) =>{
                event.preventDefault();
                if(confirm("deseja excluir este comentário permanentemente?")){
                    $.ajax({
                        url:'http://localhost:8000/api/deleteComent'+id,
                        type:'DELETE',
                        success:(response)=>{
                            loadComents(response.post_id);
                        },
                        error:()=>{
                            alert('não foi possivel excluir este comentário no momento');
                        }
                    });
                }
            }
    
            $('#comentForm').on('submit', (e)=>{
                e.preventDefault();
                const content = $('#content').val();
                const author = $('input[name="author_id"]').val();
                const post = $('input[name="post_id"]').val();
    
                $.ajax({
                    url: 'http://localhost:8000/api/coment',
                    type:'POST',
                    data:{
                        content: content,
                        author_id: author,
                        post_id: post
                    },
                    success: ()=>{
                        loadComents(post);
                    },
    
                    error: (error) =>{
                        console.log(error);
                    }
                });
                return false;
            });    
        });
</script>
@endsection