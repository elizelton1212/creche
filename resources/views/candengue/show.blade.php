@extends('adminlte::page')

@section('title', 'CandenguesTrezimar')

@section('content_header')

@stop

@section('content')

<div class="card card-primary">
   <div class="card-header">
   
   <h3 class="card-title">Candengue Selecionado</h3>
   </div>

   <div class='form-group'></div>
   
   <div class="card-body">
   <div id='dados'>
  <center> <img src='{{asset('storage/candengues/'.$candengue->imagem)}}' alt="AdminLTE Logo" height='200' class="brand-image img-circle elevation-3" style="opacity: .8"></center>

   <div class='form-control'><strong>Nome:</strong>{{ $candengue->nome }}</div>
   
   <div class='form-control'><strong>Idade:</strong>{{ $candengue->idade }}</div>
   <div class='form-control'><strong>Data de Nascimento:</strong>{{ $candengue->dataNascimento }}</div>
   <div class='form-control'><strong>Genero:</strong>{{ $candengue->genero }}</div>
   <div class='form-control'><strong>Restrição:</strong>{{ $candengue->restricao }}</div>
   <div class='form-control'><strong>Pai:</strong>{{ $candengue->nomePai }}</div>
   <div class='form-control'><strong>Mãe:</strong>{{ $candengue->nomeMae }}</div>
   <div class='form-control'><strong>Telefone do Pai:</strong>{{ $candengue->telefonePai}}</div>
   <div class='form-control'><strong>Telefone da Mãe:</strong>{{ $candengue->telefoneMae}}</div>
   <div class='form-control'><strong>Pessoa Alternativa:</strong>{{ $candengue->pessoaAlternativa}}</div>
   <div class='form-control'><strong>Contacto Alternativo:</strong>{{ $candengue->contactoPessoaAlternativa}}</div>
   <div class='form-control'><strong>Actividades:</strong>
   
   @foreach ($candengue->Atividade as $ca )

   @php
      $a = $atividades->find($ca->atividade_id);
      //dd($a);
 @endphp
   
   {{ $a->descricao.","  }}  
     
   @endforeach
   </div>

   <div class='form-control'><strong>Turma:</strong>
   @foreach ($turmaCandengue as $b )
   {{ ($ta->find($b->turma_id)->descricao) }}
       
   @endforeach
   
   
   </div>
   <div class='form-control'><strong>Transporte:</strong>
    @foreach ($t as $tt )

    @php
     $transporte=$transportes->find($tt->transporte_id);
    @endphp
       {{ $transporte->pontoPartida }}
   @endforeach
   
   
   
   
   </div>

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