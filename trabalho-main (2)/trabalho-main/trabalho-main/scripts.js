function submeterFormulario(id_formulario) {
    let formulario = $('#' + id_formulario);

    formulario.submit(function(e){
        
        e.preventDefault();

        // submissao do formulário em Ajax
        $.ajax({
            type: formulario.attr('method'),
            url: formulario.attr('action'),
            data:formulario.serialize(),
            success: function(i) {
                document.getElementById('resultado').innerText = 'Submetido com sucesso.';
            },
            error: function() {
                $('#resultado').html('Erro com a submissão');
            }
        })

    })
}

function chamaMenu(){
    let conteud = document.querySelector("#menu");
    carregar_arquivo("menu.html", conteud);
}

function carregar_arquivo(url, conteud) {
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            conteud.innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", url);
    xmlhttp.send();
}
  
