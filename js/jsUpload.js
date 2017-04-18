/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function ()
{
    $("form").on('submit', (function (e) {
        e.preventDefault();
        $.ajax({
            url: "carregaArquivo.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            success: function (data)
            {
                $("#boxMsg").html("");
                $.each(data, function (i, e)
                {
//                    tratamos as mensagens com json
                    if (e.sucesso) {
                        $("#boxMsg").append( e.sucesso + '<br/>');
                    }
                    if (e.permissaoError) {
                        $("#boxMsg").append('<i style="color: red;">' + e.permissaoError + '<i/><br/>');
                    }
                    if (e.errorImg) {
                        $("#boxMsg").append('<i style="color: red;">' + e.errorImg + '<i/><br/>');
                    }
                    if (e.permissaoPasta) {
                        $("#boxMsg").append('<i style="color: red;">' + e.errorImg + '<i/><br/>');
                    }
                });
                $(":file").val("");
            },
            error: function () {
                alert("Erro ao carregar arquivo.");
            }
        });
    }));
});