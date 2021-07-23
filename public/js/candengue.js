$(document).ready(function(){
$("#retorno").hide()
   /* $('#salvar-candengue').click(function(event){
        event.preventDefault()
if($('#nome').val()=="" || $('#nome').val()==" " || $('#nome').val()=="   " ){
    
        $('#nome').css('border','3px solid #FF0000')
    }else if($('#idade').val()=="" || $('#idade').val()==" " || $('#idade').val()=="   " ){
    
        $('#idade').css('border','3px solid #FF0000')
    } else if($('#genero').val()){
    
        $('#genero').css('border','3px solid #FF0000')
    }else if($('#restricao').val()=="" || $('#restricao').val()==" " || $('#restricao').val()=="   " ){
    
        $('#restricao').css('border','3px solid #FF0000')
    
    }
     else if($('#nomePai').val()=="" || $('#nomePai').val()==" " || $('#nomePai').val()=="   " ){
    
        $('#nomePai').css('border','3px solid #FF0000')
    
    }else if($('#nomeMae').val()=="" || $('#nomeMae').val()==" " || $('#nomeMae').val()=="   " ){
    
        $('#nomeMae').css('border','3px solid #FF0000')
    
    }else if($('#telefonePai').val()=="" || $('#telefonePai').val()==" " || $('#telefonePai').val()=="   " ){
    
        $('#telefonePai').css('border','3px solid #FF0000')
    }else if($('#telefoneMae').val()=="" || $('#telefoneMae').val()==" " || $('#telefoneMae').val()=="   " ){
    
        $('#telefoneMae').css('border','3px solid #FF0000')
    }






    else{
       
        $.ajax({
       
        url:"cadastrarCandengue",
        data:$('form').serialize(),
        dataType:'text',
        success:function(mensagem){
           // $('#retorno').text(mensagem)
          
            $('#retorno').text(mensagem)
            $('#retorno').show();

            $('#nome').val('')
            $('idade').val('')
            $('genero').val('')
            $('nomePai').val('')
            $('nomeMae').val('')
            $('restricao').val('')
            $('telefonePai').val('')
            $('telefoneMae').val('')


        
           
        }
     

      
    })
 $('#retorno').text('')
    $('#alertdescricao').text('')
    $('#descricao').css('border','')
}


  })
 
*/
$('#alterarCandengue').click(function(event){
event.preventDefault();

$.ajax({
url:'/updateCandengue',
data:$('form').serialize(),
dataType:'text',

success:function(mensagem) {
    
    $('#r').append(`<div class='btn btn-primary'>${mensagem}</div>`);
}




})




});

$('#imprimir').click(function(){

 
    window.addEventListener("load", window.print());
  
   })

});









(function (win,doc){
    'use strict';
    
    function confirmDel(event) {
        event.preventDefault();
    let token=doc.getElementsByName('_token')[1].value;
        //console.log(event.target.parentNode.href);
        if (confirm('Deseja Mesmo eliminar?')){
    let ajax = new XMLHttpRequest()
    ajax.open('DELETE',event.target.parentNode.href)
    ajax.setRequestHeader('X-CSRF-TOKEN',token)
    ajax.onreadystatechange=function(){
    if(ajax.readyState === 4 && ajax.status === 200){
        console.log('Deu Certo');
        win.location.href  = 'candengue';
    }
    };
    ajax.send();
        }else{
            return false; 
        }
    }
    
    if (doc.querySelector('.js-del')){
    let btn =doc.querySelectorAll('.js-del')
    
        for (let i=0; i<btn.length;i++){
    
            btn[i].addEventListener('click',confirmDel,false);
        }
    
    }
    
    
    
    })(window,document)
    
    
    
    