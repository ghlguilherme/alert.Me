$(document).ready(function () {
        //Requisição para alteração da senha do usuário
    var request;
    $("#botao-confirmar-alerta").click(function (event) {
        if (request) {
            request.abort();
        }
        var $form = $("#form-novo-alerta");
        var $inputs = $form.find("input, select, button, textarea");
        var serializedData = $form.serialize();
        $inputs.prop("disabled", true);
        request = $.ajax({
            url: "paginas/processamento_app.php"
            , type: "post"
            , data: serializedData
        });
        request.done(function (response, textStatus, jqXHR) {
            if (response === 'success') {
                alert('Alerta cadastrado com sucesso!');
                location.href = 'mapa.php';
            }else if(response === 'erro_descricao'){
                alert('Campo descrição deve ser preenchido!');
            }else if(response === 'erro_latitude'){
                alert('Campo latitude está incorreto!');
            }else if(response === 'erro_longitude'){
                alert('Campo longitude está incorreto!');
            }
        });
        request.fail(function (jqXHR, textStatus, errorThrown) {
            console.error("Ocorreu o seguinte erro: " + textStatus, errorThrown);
        });
        request.always(function () {
            $inputs.prop("disabled", false);
        });
        event.preventDefault();
    });
});
    