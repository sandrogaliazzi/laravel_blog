<form id="editForm">
    <div class='form-group'>
        <input name="comentId" type="hidden" value="{{$id}}">
        <textarea class="form-control" onkeyup="editedComent = $(this).val()" id="editedComentContent" rows="3">{{$coment}}</textarea>
    </div>
    <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
    <button id="btnCancel" class="btn btn-secondary btn-sm">Cancelar</button>
</form>
<script>
    $(function(){

        const id = $("input[name='comentId']").val();

        $('#btnCancel').click(()=>{
           getComent(id);
        });

        const getComent = (id) =>{
            $.get('http://localhost:8000/api/showComent/'+id, (response)=>{
                $('#editForm').parent().html("<p class='mb-1'>"+response.content+"</p>");
            });  
        }

        $('#editForm').on('submit', (e)=>{
            e.preventDefault();
            let editedComent = $('#editedComentContent').val();
            $.ajax({
                url:'http://localhost:8000/api/updateComent',
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
            })
        })
    })
</script>