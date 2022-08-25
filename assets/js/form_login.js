$(document).ready(function (){
    validar_form();
    $('#email, #senha').keyup(validar_form);
});

function validar_form(){
    var validar_email = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/gi

    if (validar_email.test($('#email').val()) &&
        $('#senha').val().length >= 5){
        $("#btn-login").prop("disabled", false);
    }
    else {
        $("#btn-login").prop("disabled", true);
    }
}


$('#btn-login').click(function(){
    $.ajax({
        type: 'POST',
        url: 'app/login-valida',
        data: { email: $('#email').val(), senha: $('#senha').val() },
        success: function(resultado){
            $("#msg-login").html(resultado);
            $("#senha").val("");
            $("#btn-login").prop("disabled", true);

            setTimeout(() => {
                $("#msg-login").html(null);
            }, 4500);

        }
    });
});