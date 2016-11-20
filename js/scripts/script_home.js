//Script de processamento de requisições da página principal
//Recarrega o mapa ao clicar nas abas da página
$(document).on('shown.bs.tab', 'a[data-toggle="tab"]', function (e) {
    resizeMap();
});

//esta função recebe o id do alerta que ela vai excluir
function excluirAlerta(id){
    $("#delete-alerta-id").val(id);
    $("#botao-delete-alerta").click();
}
$(document).ready(function () {
   
    //Função de evento de clique nos botões
              document.getElementById('btnRoad').addEventListener('click', function(){
                  map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
              });
              document.getElementById('btnSat').addEventListener('click', function(){
                  map.setMapTypeId(google.maps.MapTypeId.SATELLITE);
              });
              document.getElementById('btnHyb').addEventListener('click', function(){
                  map.setMapTypeId(google.maps.MapTypeId.HYBRID);
              });
              document.getElementById('btnTer').addEventListener('click', function(){
                  map.setMapTypeId(google.maps.MapTypeId.TERRAIN);
              });
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
    
    //Requisição ajax de logout2
    // Variable to hold request
    var request;
    $("#btn-sair2").click(function (event) {
        if (request) {
            request.abort();
        }
        var $form = $("#form-sair2");
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
                $('#modal-senha').modal('toggle');
            }else if(response === 'erro_senha'){
                alert('A senha não pode ser vazia!');
            }else if(response === 'erro_contrasenha'){
                alert('Digite novamente a senha!');
            }else if(response === 'erro_senhas_diferentes'){
                alert('As senhas nos campos não correspondem!');   
            }else {
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
    
    //Controle da exibição da senha conforme os botões
    var controle1 = 0, controle2 = 0;
    $("#show-password1").click(function(event){
         if(controle1 == 0){
             $("#senha-nova").attr('type', 'text');
             $("#olho1").attr('class', 'fa fa-eye-slash');
             controle1 = 1;
         }else{
             $("#senha-nova").attr('type', 'password');
             $("#olho1").attr('class', 'fa fa-eye');
             controle1 = 0;
         }
    });
    $("#show-password2").click(function(event){
         if(controle2 == 0){
             $("#senha-nova-repete").attr('type', 'text');
             $("#olho2").attr('class', 'fa fa-eye-slash');
             controle2 = 1;
         }else{
             $("#senha-nova-repete").attr('type', 'password');
             $("#olho2").attr('class', 'fa fa-eye');
             controle2 = 0;
         }
    });
    
    $("#novo-alerta").click(function (event) {
        location.href = "mapa.php";
    });
    
    //Requisição para alteração da senha do usuário
    var request;
    $("#botao-delete-alerta").click(function (event) {
        alert('passou');
        if (request) {
            request.abort();
        }
        var $form = $("#form-delete-alerta");
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
                alert('Alerta excluído com sucesso!');
                location.href = 'home.php';
            }else{
                alert('Erro: tente novamente mais tarde.')
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
