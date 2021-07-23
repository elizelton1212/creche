$(document).ready(function(){

    $('#salvar-turma').click(function(event){
        event.preventDefault();
        if($('#descricao').val()=='' ||$('#descricao').val()==' ' || $('#descricao').val()=='  ' || $('#descricao').val()=='     '){
            $('#descricao').css('border','3px solid #FF0000')



        }else{

    $.ajax({
        url:'salvarTurma',
        data:$('form').serialize(),
        dataType:'text',

        success:function(mensagem){
            $('#r').text(mensagem)
            $('#descricao').val('');

        }
    })
}
    })



    $('#save').click(function(event){

        event.preventDefault();

        if($('#candengue').val()==''){

        }else if ($('#turma')==''){


        }else{

            $.ajax({
                url:'candengueTurma',
                data:$('form').serialize(),
                dataType:'text',

                success:function(mensagem){
                    $('#alerta').text(mensagem)


                }



            })



        }


    })


$('#alterarDados').click(function(event){
    event.preventDefault();

    $.ajax({
        url:'/updateTurma',
        data:$('form').serialize(),
        dataType:'text',

        success:function (params) {
            $('#r').text(params)
        }

    })



})




})

