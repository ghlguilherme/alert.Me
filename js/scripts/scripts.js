
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
    $("#txt-rua").click(function(event){
        $( "#txt-rua" ).animate({
            backgroundColor: "white"
        });
        $("#rua-mensagem").text("");
        $("#txt-rua").removeClass("altera-cor-placeholder");
    });
    //Campo numero
    $("#txt-numero").click(function(event){
        $( "#txt-numero" ).animate({
            backgroundColor: "white"
        });
        $("#numero-mensagem").text("");
        $("#txt-numero").removeClass("altera-cor-placeholder");
    });
    //Campo bairro
    $("#txt-bairro").click(function(event){
        $( "#txt-bairro" ).animate({
            backgroundColor: "white"
        });
        $("#bairro-mensagem").text("");
        $("#txt-bairro").removeClass("altera-cor-placeholder");
    });
    //Campo cidade
    $("#txt-cidade").click(function(event){
        $( "#txt-cidade" ).animate({
            backgroundColor: "white"
        });
        $("#cidade-mensagem").text("");
        $("#txt-cidade").removeClass("altera-cor-placeholder");
    });
    //Campo estado
    $("#select-estado").click(function(event){
        $( "#select-estado" ).animate({
            backgroundColor: "white"
        });
        $("#estado-mensagem").text("");
        $("#select-estado").removeClass("altera-cor-placeholder");
    });
    //Campo telefone
    $("#txt-telefone").click(function(event){
        $( "#txt-telefone" ).animate({
            backgroundColor: "white"
        });
        $("#telefone-mensagem").text("");
        $("#txt-telefone").removeClass("altera-cor-placeholder");
    });
    //Campo celular
    $("#txt-celular").click(function(event){
        $( "#txt-celular" ).animate({
            backgroundColor: "white"
        });
        $("#celular-mensagem").text("");
        $("#txt-celular").removeClass("altera-cor-placeholder");
    });
    //Campo email
    $("#txt-email").click(function(event){
        $( "#txt-email" ).animate({
            backgroundColor: "white"
        });
        $("#email-mensagem").text("");
        $("#txt-email").removeClass("altera-cor-placeholder");
    });
    //Campo senha
    $("#txt-senha").click(function(event){
        $( "#txt-senha" ).animate({
            backgroundColor: "white"
        });
        $("#senha-mensagem").text("");
        $("#txt-senha").removeClass("altera-cor-placeholder");
    });
    //Campo contrasenha
    $("#txt-contrasenha").click(function(event){
        $( "#txt-contrasenha" ).animate({
            backgroundColor: "white"
        });
        $("#contrasenha-mensagem").text("");
        $("#txt-contrasenha").removeClass("altera-cor-placeholder");
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
                location.href = "home.php";
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
                alert("Cadastro realizado com sucesso!");
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
            }else if(response === 'erro_senha_diferentes'){
                $( "#txt-senha" ).animate({
                    backgroundColor: "#ff0000",
                    textDecorationColor: "#ff0000"
                });
                //$("#senha-mensagem").text("Campo contrasenha está vazio!");
                $("#txt-contrasenha").addClass("altera-cor-placeholder");
                $( "#txt-contrasenha" ).animate({
                    backgroundColor: "#ff0000",
                    textDecorationColor: "#ff0000"
                });
                $("#contrasenha-mensagem").text("Senhas estão diferentes!");
                $("#txt-contrasenha").addClass("altera-cor-placeholder");
            }else if(response === 'erro_usuario_existe'){
                $( "#txt-usuario" ).animate({
                    backgroundColor: "#ffff00",
                    textDecorationColor: "#ffff00"
                });
                $("#usuario-mensagem").text("Nome de usuário já se encontra em uso!");
                $("#txt-usuario").addClass("altera-cor-placeholder");
            }else{
                alert(response);
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
    
    //Preenchimento automático dos campos auo digitar o cep
     function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#txt-rua").val("");
                $("#txt-bairro").val("");
                $("#txt-cidade").val("");
                $("#select-estado").val("");
            }
            
            //Quando o campo cep é alterado
            $("#txt-cep").change(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#txt-rua").val("Buscando");
                        $("#txt-bairro").val("Buscando");
                        $("#txt-cidade").val("Buscando");
                        $("#select-estado").val("Buscando");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#txt-rua").val(dados.logradouro);
                                $("#txt-bairro").val(dados.bairro);
                                $("#txt-cidade").val(dados.localidade);
                                $("#select-estado").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
    
            //Configuração do enter para logar depois da senha
            $("#txt-senha-login").keyup(function(event){
                if(event.keyCode == 13){
                    $("#btn-login").click();
                }
            });
});
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
    
});
