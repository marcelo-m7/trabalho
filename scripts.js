function submeterFormulario(id_formulario) {
    let formulario = $('#' + id_formulario);

    formulario.submit(function(e){
        
        e.preventDefault();

        $.ajax({
            type: formulario.attr('method'),
            url: formulario.attr('action'),
            data:formulario.serialize(),
            success: function(i) {
                document.getElementById('resultado').innerHTML = '<p> Submetido com sucesso.<p>';
            },
            error: function() {
                $('#resultado').html('Erro com a submissão');
            }
        })

    })
}

