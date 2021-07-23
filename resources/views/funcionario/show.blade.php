@extends('adminlte::page')

@section('title', 'CaNdengue')

@section('content_header')

@stop

@section('content')


<div class="box">

<div class="card card-primary">
   <div class="card-header">
   <h3 class="card-title">Funcionario Selecionado</h3>
   </div>
   <div class='form-group'></div>
   <div class="card-body">
   <div id='dados'>
   <div class='form-control'><strong>Nome:</strong>{{ $funcionario->nome }}</div>
   <div class='form-control'><strong>Genero:</strong>{{ $funcionario->genero}}</div>
   <div class='form-control'><strong>Estado Civil:</strong>{{ $funcionario->estadoCivil}}</div>
   <div class='form-control'><strong>Nº BI:</strong>{{ $funcionario->nome }}</div>
   <div class='form-control'><strong>INSS:</strong>{{ $funcionario->inss }}</div>
   <div class='form-control'><strong>Nacionalidade:</strong>{{ $funcionario->nacionalidade}}</div>
   <div class='form-control'><strong>IBAN:</strong>{{ $funcionario->iban}}</div>
   <div class='form-control'><strong>Salario Liquido:</strong>{{ $funcionario->salarioLiquido}}</div>
   <div class='form-control'><strong>Salario Bruto:</strong>{{ $funcionario->salarioBruto}}</div>
   <div class='form-control'><strong>Salario Base:</strong>{{ $funcionario->salarioBase}}</div>
   <div class='form-control'><strong>Bonus:</strong>{{ $funcionario->bonus}}</div>
   <div class='form-control'><strong>Telefone:</strong>{{ $funcionario->telefone}}</div>

</div>
   </div>
   </div>
<button type='button' onclick='funcao_pdf()'><i class ='fas fa-print'></i></button>


<script> 

function funcao_pdf() {
	
	var pegar_dados = document.getElementById('dados').innerHTML
	var janela = window.open('','','width=800,heigth=600')

	janela.document.write('<html><head>');
	janela.document.write('<title>PDF</title></head>');
	janela.document.write(pegar_dados);

	janela.document.write('</body></html>');

	janela.print();
}


</script>








 

@stop