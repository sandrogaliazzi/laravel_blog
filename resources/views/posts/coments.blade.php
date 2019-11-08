<div class="row mt-5">
    <div id="coments" class="col-md-8 offset-md-1">
        <div class="list-group">
            @foreach ($post->coments->sortByDesc('created_at') as $coment)
            <div class="mb-4">
                <div class="d-flex w-100">
                    <p class="mb-1 mr-4"><strong>{{$coment->author->name}}</strong></p>
                    <small>{{$coment->created_at->diffForHumans()}}</small>
                </div>
                <div>
                    <div class="d-flex w-100 justify-content-between">
                        <div id="coment{{$coment->id}}" class="col-md-12">
                            <p class="mb-1">{{$coment->content}}</p>
                        </div>
                            @if($user->id === $coment->author_id)  
                            <div class="dropdown">
                                <button class="btn" data-toggle="dropdown" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </button>
                                  
                                <div class="dropdown-menu">
                                    <a href="" onclick="$().editComent({{$coment->id}})"   style="cursor:pointer" class="dropdown-item">
                                        <i class="material-icons">create</i> Editar
                                    </a>
                                    <a href="" onclick="$().deleteComent({{$coment->id}})" class="dropdown-item">
                                        <i class="material-icons">delete</i> Excluir
                                    </a>
                                </div>
                            @endif        
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>