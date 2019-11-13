<form id="editForm">
    <div class='form-group'>
        <textarea class="form-control" id="editedComentContent" rows="3">{{$coment->content}}</textarea>
    </div>
    <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
    <button id="btnCancel" class="btn btn-secondary btn-sm">Cancelar</button>
</form>
<script>
    $(function(){

        const id = {{$coment->id}};

        $('#btnCancel').click(()=>{
            event.preventDefault();
            getComent(id);
        });

        const getComent = (id) =>{
            const url = '{{route("coment.show", ":id")}}'
            $.get(url.replace(':id', id), (response)=>{
                $('#editForm').parent().html("<p class='mb-1'>"+response.content+"</p>");
            });  
        }

        $('#editForm').on('submit', (e)=>{
            e.preventDefault();
            let editedComent = $('#editedComentContent').val();
            $.ajax({
                url:'{{route("coment.update")}}',
                type:'PUT',
                data:{
                    id: id,
                    content: editedComent
                },

                success:(response)=>{
                    getComent(response.coment.id);
                },

                error:(err)=>{
                    alert(err);
                }
            });
        });
    })
</script>