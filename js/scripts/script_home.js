//Script de processamento de requisições da página principal

$(document).ready(function () {
    //Aplicação de máscaras para cep e telefones
    $("#txt-cep-perfil").mask('00000-000');
    $("#txt-telefone-perfil").mask('(00) 0000-0000');
    $("#txt-celular-perfil").mask('(00) 00000-0000');
    
    //Aplicação de máscara de data para data de nascimento
    $("#txt-nascimento-perfil").mask('00/00/0000');
    
    $("#txt-nascimento-perfil").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "dd/mm/yy",
        maxDate: "+0d",
        yearRange: "1920:2016",
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
        dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
        nextText: 'Próximo',
        prevText: 'Anterior'
    }); 
    
    //Requisição ajax de logout
    // Variable to hold request
    var request;
    $("#btn-sair").click(function (event) {
        if (request) {
            request.abort();
        }
        var $form = $("#form-sair");
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
                location.href = "index.php";
            }
            else {
                alert("Erro ao realizar operação: " + response);
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
    
    //Requisição de atualização do perfil do usuário
    var request;
    $("#btn-atualizar-dados").click(function (event) {
        if (request) {
            request.abort();
        }
        var $form = $("#form-perfil");
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
                alert('Dados foram atualizados');
                
            }
            else {
                alert("Erro ao realizar operação: " + response);
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
    
    //Requisição para alteração da senha do usuário
    var request;
    $("#btn-alterar-senha").click(function (event) {
        if (request) {
            request.abort();
        }
        var $form = $("#form-alterar-senha");
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
                alert('Sua senha foi alterada!');
                
            }
            else {
                alert("Erro ao realizar operação: " + response);
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
