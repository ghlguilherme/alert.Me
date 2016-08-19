
$(document).ready(function () {
    $("#txt-cep").mask('00000-000');
    $("#txt-telefone").mask('(00) 0000-0000');
    $("#txt-celular").mask('(00) 00000-0000');
    $("#txt-nascimento").mask('00/00/0000');
    
    $("#txt-nascimento").datepicker({
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
            }else if(response === 'erro_nome'){
               /*$( "#nome-message" ).animate({
                    
                });*/
                $("#nome-message").text("Nome não pode ser vazio!");
            }else if(response === 'erro_nascimento'){
                
            }else if(response === 'erro_usuario'){
                
            }else if(response === 'erro_cep'){
                
            }else if(response === 'erro_rua'){
                
            }else if(response === 'erro_numero'){
                
            }else if(response === 'erro_bairro'){
                
            }else if(response === 'erro_cidade'){
                
            }else if(response === 'erro_estado'){
                
            }else if(response === 'erro_telefone'){
                
            }else if(response === 'erro_celular'){
                
            }else if(response === 'erro_email'){
                
            }else if(response === 'erro_senha'){
                
            }else if(response === 'erro_contrasenha'){
                
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

function exibeMensagem(texto){

}
