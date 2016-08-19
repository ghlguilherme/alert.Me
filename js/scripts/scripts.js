
$(document).ready(function () {
    $("#txt-cep").mask('00000-000');
    $("#txt-telefone").mask('(00) 0000-0000');
    $("#txt-celular").mask('(00) 00000-0000');
    
    $('#txt-nascimento').datepicker({
        language: "pt-BR"
    });
    
    //Requisição ajax de login
    // Variable to hold request
    var request;
    $("#btn-login").click(function (event) {
        if (request) {
            request.abort();
        }
        var $form = $("#form-login");
        var $inputs = $form.find("input, select, button, textarea");
        var serializedData = $form.serialize();
        $inputs.prop("disabled", true);
        request = $.ajax({
            url: "paginas/processamento_login.php"
            , type: "post"
            , data: serializedData
        });
        request.done(function (response, textStatus, jqXHR) {
            if (response === 'success') {
                alert("Sucesso no login");
            }
            else {
                alert("Usuário ou senha incorreto: " + response);
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
    
    //Requisição ajax de cadastro
    // Variable to hold request
    var request;
    $("#btn-cadastro").click(function (event) {
        if (request) {
            request.abort();
        }
        var $form = $("#form-cadastro");
        var $inputs = $form.find("input, select, button, textarea");
        var serializedData = $form.serialize();
        $inputs.prop("disabled", true);
        request = $.ajax({
            url: "paginas/processamento_cadastro.php"
            , type: "post"
            , data: serializedData
        });
        request.done(function (response, textStatus, jqXHR) {
            if (response === 'success') {
                alert("Sucesso no cadastro");
            }
            else {
                alert("Usuário ou senha incorreto: " + response);
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
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
    
});
/*
  $( function() {
    $("#txt-nascimento").datepicker();
  });
*/
