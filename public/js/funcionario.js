$(document).ready(function(){

    $('#salvar-funcionario').click(function(event){
        event.preventDefault();
var nome=$('#nome').val()
var genero=$('#genero').val()
var funcao=$('#funcao').val()
var nbi=$('#nbi').val()
var inss=$('#inss').val()
var iban=$('#iban').val()
var name=$('#name').val()
var email=$('#email').val()
var password=$('#password').val()
var salarioBase=$('#salarioBase').val()
var bonus=$('#bonus').val()
var telefone=$('#telefone').val()

  
if (nome=='' || nome==' ' || nome=='   ' || nome=='    '){

    $('#nome').css('border','3px solid #FF0000')
}else if (funcao==''){

    $('#funcao').css('border','3px solid #FF0000')
}else if (nbi=='' || nbi==' ' || nbi=='   ' || nbi=='    '){

    $('#nbi').css('border','3px solid #FF0000')
}else if (inss=='' || inss==' ' || inss=='   ' || inss=='    '){

    $('#inss').css('border','3px solid #FF0000')
}else if (iban=='' || iban==' ' || iban=='   ' || iban=='    '){

    $('#iban').css('border','3px solid #FF0000')
}else if (name=='' || name==' ' || name=='   ' || name=='    '){

    $('#name').css('border','3px solid #FF0000')
}else if (email=='' || email==' ' || email=='   ' || email=='    '){

    $('#email').css('border','3px solid #FF0000')
}else if (password=='' || password==' ' || password=='   ' || password=='    '){

    $('#password').css('border','3px solid #FF0000')
}else if (salarioBase=='' || salarioBase==' ' || salarioBase=='   ' || salarioBase=='    '){

    $('#salarioBase').css('border','3px solid #FF0000')
}else if (bonus=='' || bonus==' ' || bonus=='   ' || bonus=='    '){

    $('#bonus').css('border','3px solid #FF0000')
}else if (telefone=='' || telefone==' ' || telefone=='   ' || telefone=='    '){

    $('#telefone').css('border','3px solid #FF0000')
}

else { 









        $.ajax({
            url:"cadastrarFuncionario",
            data:$('form').serialize(),
            dataType:'text',
            success:function(mensagem){
            
                $('#r').append(`<div id='retorno' class="btn btn-success">${mensagem}</div>`)
                $('#nome').val('')
                $('#genero').val('')
                $('#funcao').val('')
                $('#nbi').val('')
                $('#inss').val('')
                $('#iban').val('')
                $('#name').val('')
                $('#email').val('')
                $('#password').val('')
                $('#departamento').val('')



                



               
            }

        })}


    })
    

$('#alterarFuncionario').click(function(event) {
    event.preventDefault();

    $.ajax({
        url:'/updateFuncionario',
        data:$('form').serialize(),
        dataType:'text',

        success:function (mensagem) {
            
            $('#r').append(`<div class='btn btn-primary'>${mensagem}</div>`)

        }



    })
    
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
            win.location.href  = 'funcionario';
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
        
    