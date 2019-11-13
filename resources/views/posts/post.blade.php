@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            <h1 class="mb-5">{{$post->title}}</h1>
            <p class="lead">Autor: {{$post->author->name}}</p>
            <hr>
            <p>Postado em {{$post->created_at->format('d/m/Y')}}</p>
            <hr>
            <img class="img-fluid rounded" src="{{asset('storage/'.$post->path_to_image)}}" alt="post image">
            <p class="mt-5 lead" style="font-family:roboto">{!! nl2br(e($post->content)) !!}</p>
        </div>
    </div>
    <div class="mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <h5 class="card-header">deixe um comentário</h5>
                    <div class="card-body">
                        <form id="comentForm">
                            <div class="form-group">
                                <textarea type="text" id="content" class="form-control" rows="4"
                                    placeholder="deixe seu comentário"></textarea>
                            </div>
                            @if(Auth::check())
                                <button type="submit" id="btnSave" disabled class="btn btn-primary">Comentar</button>
                            @else
                                <a class="btn btn-primary" href="{{route('login')}}">Login</a>
                            @endif        
                        </form>
                        <div id="comentsContainer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if(Session::has('updateMessage'))
    <script>alert('{{Session::get("updateMessage")}}')</script>
@endif    
<script>    
    $(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(()=>{
                loadComents();
            })

            $('#content').keyup(()=>{
                if($('#content').val().length > 0){
                    $('#btnSave').attr('disabled', false);
                } else {
                    $('#btnSave').attr('disabled', true);
                }
            });

           const getUserId = () =>{
               return  {{(Auth::check()) ? Auth::user()->id : 0}};
           }
    
            const loadComents = () =>{
                $.post('{{route("coment.load")}}', {
                    postId:{{$post->id}},
                    userId: getUserId(),
                } ,response => {
                    $('#comentsContainer').html(response);
                });
            }
            
            $('body').on('click', '#btnEdit', ()=>{
                event.preventDefault();
                const id = $("#btnEdit").data("id");
                $.post('{{route("coment.edit")}}', {
                    id:id
                }, (response)=>{
                    $(`#coment${id}`).html(response);
                    
                });
            });

            $('body').on('click', '#btnDelete', ()=>{
                event.preventDefault();
                const id = $("#btnDelete").data("id");
                const url = '{{route("coment.destroy", ":id")}}';
                if(confirm("deseja excluir este comentário permanentemente?")){
                    $.ajax({
                        url:url.replace(':id', id),
                        type:'DELETE',
                        success:()=>{
                            loadComents();
                        },
                        error:()=>{
                            alert('não foi possivel excluir este comentário no momento');
                        }
                    });
                } 
            });
    
            $('#comentForm').on('submit', (e)=>{
                e.preventDefault();
                let content = $('#content').val();
                let author = getUserId();
                let post = {{$post->id}};
    
                $.ajax({
                    url: '{{route("coment.create")}}',
                    type:'POST',
                    data:{
                        content: content,
                        author_id: author,
                        post_id: post
                    },
                    success: ()=>{
                        loadComents();
                        $('#comentForm').trigger('reset');
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