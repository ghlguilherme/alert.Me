
$(document).ready(function () {
    $("#txt-cep").mask('00000-000');
    $("#txt-telefone").mask('(00) 0000-0000');
    $("#txt-celular").mask('(00) 00000-0000');
    
    $('#txt-nascimento').datepicker({
        language: "pt-BR"
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
