<form action="{{route('post.update', $post->id)}}" method="post" class="mt-5" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" value="{{$post->title}}" name="title" id="title">
    </div>
    <input type="hidden" name="author" value="{{Auth::user()->id}}">
    <div class="form-group">
        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" name="post-img" class="custom-file-input" id="file">
                <label class="custom-file-label" for="file">
                    <i class="material-icons">add_photo_alternate</i>
                </label>
            </div>
        </div>
        <div id="img-preview">
            <img src="{{asset('storage/'.$post->path_to_image)}}" class="rounded float-left my-4" width="400"
                height="autp" id="select-file" />
        </div>
    </div>
    <div class="form-group">
        <textarea name="content" class="form-control" id="content" cols="30" rows="20">{{$post->content}}</textarea>
    </div>
    <button type="submit" style="margin-bottom:8px;" class="btn btn-block btn-success">Atualizar</button>
</form>
<script>
    $(function(){
            $('#file').change(function(){
                const file = $('#file')[0].files[0];
                const fileReader = new FileReader();
                fileReader.onloadend = () =>{
                    $('#select-file').attr('src', fileReader.result);
                }
                fileReader.readAsDataURL(file);
            });
        })
</script>