
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
    //Retorno a animação original dos campos do form
    //Campo nome
    $("#txt-nome").click(function(event){
        $( "#txt-nome" ).animate({
            backgroundColor: "white"
        });
        $("#nome-mensagem").text("");
        $("#txt-nome").removeClass("altera-cor-placeholder");
    });
    //Campo nascimento
    $("#txt-nascimento").click(function(event){
        $( "#txt-nascimento" ).animate({
            backgroundColor: "white"
        });
        $("#nascimento-mensagem").text("");
        $("#txt-nascimento").removeClass("altera-cor-placeholder");
    });
    //Campo usuário/login
    $("#txt-usuario").click(function(event){
        $( "#txt-usuario" ).animate({
            backgroundColor: "white"
        });
        $("#usuario-mensagem").text("");
        $("#txt-usuario").removeClass("altera-cor-placeholder");
    });
    //Campo CEP
    $("#txt-cep").click(function(event){
        $( "#txt-cep" ).animate({
            backgroundColor: "white"
        });
        $("#cep-mensagem").text("");
        $("#txt-cep").removeClass("altera-cor-placeholder");
    });
    //Campo rua
    $("#txt-nome").click(function(event){
        $( "#txt-nome" ).animate({
            backgroundColor: "white"
        });
        $("#nome-mensagem").text("");
        $("#txt-nome").removeClass("altera-cor-placeholder");
    });
    //Campo numero
    $("#txt-nome").click(function(event){
        $( "#txt-nome" ).animate({
            backgroundColor: "white"
        });
        $("#nome-mensagem").text("");
        $("#txt-nome").removeClass("altera-cor-placeholder");
    });
    //Campo bairro
    $("#txt-nome").click(function(event){
        $( "#txt-nome" ).animate({
            backgroundColor: "white"
        });
        $("#nome-mensagem").text("");
        $("#txt-nome").removeClass("altera-cor-placeholder");
    });
    //Campo cidade
    $("#txt-nome").click(function(event){
        $( "#txt-nome" ).animate({
            backgroundColor: "white"
        });
        $("#nome-mensagem").text("");
        $("#txt-nome").removeClass("altera-cor-placeholder");
    });
    //Campo estado
    $("#txt-nome").click(function(event){
        $( "#txt-nome" ).animate({
            backgroundColor: "white"
        });
        $("#nome-mensagem").text("");
        $("#txt-nome").removeClass("altera-cor-placeholder");
    });
    //Campo telefone
    $("#txt-nome").click(function(event){
        $( "#txt-nome" ).animate({
            backgroundColor: "white"
        });
        $("#nome-mensagem").text("");
        $("#txt-nome").removeClass("altera-cor-placeholder");
    });
    //Campo celular
    $("#txt-nome").click(function(event){
        $( "#txt-nome" ).animate({
            backgroundColor: "white"
        });
        $("#nome-mensagem").text("");
        $("#txt-nome").removeClass("altera-cor-placeholder");
    });
    //Campo email
    $("#txt-nome").click(function(event){
        $( "#txt-nome" ).animate({
            backgroundColor: "white"
        });
        $("#nome-mensagem").text("");
        $("#txt-nome").removeClass("altera-cor-placeholder");
    });
    //Campo senha
    $("#txt-nome").click(function(event){
        $( "#txt-nome" ).animate({
            backgroundColor: "white"
        });
        $("#nome-mensagem").text("");
        $("#txt-nome").removeClass("altera-cor-placeholder");
    });
    //Campo contrasenha
    $("#txt-nome").click(function(event){
        $( "#txt-nome" ).animate({
            backgroundColor: "white"
        });
        $("#nome-mensagem").text("");
        $("#txt-nome").removeClass("altera-cor-placeholder");
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
                $( "#txt-nome" ).animate({
                    backgroundColor: "#ff0000",
                    textDecorationColor: "#ff0000"
                });
                $("#nome-mensagem").text("Nome não pode ser vazio!");
                $("#txt-nome").addClass("altera-cor-placeholder");
            }else if(response === 'erro_nascimento'){
                $( "#txt-nascimento" ).animate({
                    backgroundColor: "#ff0000",
                    textDecorationColor: "#ff0000"
                });
                $("#nascimento-mensagem").text("Escolha uma data!");
                $("#txt-nascimento").addClass("altera-cor-placeholder");
            }else if(response === 'erro_usuario'){
                $( "#txt-usuario" ).animate({
                    backgroundColor: "#ff0000",
                    textDecorationColor: "#ff0000"
                });
                $("#usuario-mensagem").text("Digite um nome de usuário!");
                $("#txt-usuario").addClass("altera-cor-placeholder");
            }else if(response === 'erro_cep'){
                $( "#txt-cep" ).animate({
                    backgroundColor: "#ff0000",
                    textDecorationColor: "#ff0000"
                });
                $("#cep-mensagem").text("CEP não pode ser vazio!");
                $("#txt-cep").addClass("altera-cor-placeholder");
            }else if(response === 'erro_rua'){
                $( "#txt-rua" ).animate({
                    backgroundColor: "#ff0000",
                    textDecorationColor: "#ff0000"
                });
                $("#rua-mensagem").text("Rua não pode ser vazio!");
                $("#txt-rua").addClass("altera-cor-placeholder");
            }else if(response === 'erro_numero'){
                $( "#txt-numero" ).animate({
                    backgroundColor: "#ff0000",
                    textDecorationColor: "#ff0000"
                });
                $("#numero-mensagem").text("Número inválido!");
                $("#txt-numero").addClass("altera-cor-placeholder");
            }else if(response === 'erro_bairro'){
                $( "#txt-bairro" ).animate({
                    backgroundColor: "#ff0000",
                    textDecorationColor: "#ff0000"
                });
                $("#bairro-mensagem").text("Bairro não pode ser vazio!");
                $("#txt-bairro").addClass("altera-cor-placeholder");
            }else if(response === 'erro_cidade'){
                $( "#txt-cidade" ).animate({
                    backgroundColor: "#ff0000",
                    textDecorationColor: "#ff0000"
                });
                $("#cidade-mensagem").text("Cidade não pode ser vazio!");
                $("#txt-cidade").addClass("altera-cor-placeholder");
            }else if(response === 'erro_estado'){
                $( "#select-estado" ).animate({
                    backgroundColor: "#ff0000",
                    textDecorationColor: "#ff0000"
                });
                $("#estado-mensagem").text("Escolha um estado!");
                $("#select-estado").addClass("altera-cor-placeholder");
            }else if(response === 'erro_telefone'){
                $( "#txt-telefone" ).animate({
                    backgroundColor: "#ff0000",
                    textDecorationColor: "#ff0000"
                });
                $("#telefone-mensagem").text("Telefone é obrigatório!");
                $("#txt-telefone").addClass("altera-cor-placeholder");
            }else if(response === 'erro_celular'){
                $( "#txt-celular" ).animate({
                    backgroundColor: "#ff0000",
                    textDecorationColor: "#ff0000"
                });
                $("#celular-mensagem").text("Celular é obrigatório!");
                $("#txt-celular").addClass("altera-cor-placeholder");
            }else if(response === 'erro_email'){
                $( "#txt-email" ).animate({
                    backgroundColor: "#ff0000",
                    textDecorationColor: "#ff0000"
                });
                $("#email-mensagem").text("Email é obrigatório!");
                $("#txt-email").addClass("altera-cor-placeholder");
            }else if(response === 'erro_senha'){
                $( "#txt-senha" ).animate({
                    backgroundColor: "#ff0000",
                    textDecorationColor: "#ff0000"
                });
                $("#senha-mensagem").text("Campo senha está vazio!");
                $("#txt-senha").addClass("altera-cor-placeholder");
            }else if(response === 'erro_contrasenha'){
                $( "#txt-contrasenha" ).animate({
                    backgroundColor: "#ff0000",
                    textDecorationColor: "#ff0000"
                });
                $("#contrasenha-mensagem").text("Campo contrasenha está vazio!");
                $("#txt-contrasenha").addClass("altera-cor-placeholder");
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
