$(document).ready(function (){
    validar_form();
    $('#nome, #email, #senha, #confirmar_senha').keyup(validar_form);
});

function validar_form(){
    var validar_email = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/gi

    if (validar_email.test($('#email').val()) &&
        $('#nome').val().length >= 2 &&
        $('#senha').val().length >= 5 &&
        $('#confirmar_senha').val().length >= 5 &&
        $('#senha').val() == $('#confirmar_senha').val()){
        $("#btn-registro").prop("disabled", false);
    }
    else {
        $("#btn-registro").prop("disabled", true);
    }
}


$('#btn-registro').click(function(){
    $.ajax({
        type: 'POST',
        url: 'app/registro-valida',
        data: { nome: $('#nome').val(), email: $('#email').val(), senha: $('#senha').val(), confirmar_senha: $('#confirmar_senha').val() },
        success: function(resultado){
            $("#msg-registro").html(resultado);
            $("#senha").val("");
            $("#nome").val("");
            $("#email").val("");
            $("#confirmar_senha").val("");
            $("#btn-registro").prop("disabled", true);

            setTimeout(() => {
                $("#msg-registro").html(null);
            }, 4500);

        }
    });
});