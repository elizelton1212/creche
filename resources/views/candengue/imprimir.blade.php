@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')

@stop

@section('content')


<div class="box">
    
    <div class="box-header">
Candengue
 </div>
<div class="box-body">

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
<div class="card-body">
<div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
<div class="col-sm-12 col-md-6"></div>
<div class="col-sm-12 col-md-6">
</div></div><div class="row">
<div class="col-sm-12">
<div id='dados'>
 <center> <img src='{{asset('img/logo1.png')}}' style='max-width: 150px'><br>Lista de Estudantes</center>

<table id="tabela-fornecedor" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nome Completo</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">idade</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Restrição</th>
</tr>
</thead>
<tbody>
@foreach ($candengues as $c)
<tr>
<td>{{$c->id}}</td>
<td>{{$c->nome}}</td>
<td>{{$c->idade}}</td>
<td>{{$c->restricao}}</td>







</tr>



    
@endforeach



</tbody>
</table>  
{{ $candengues->links() }}    
</div>
<button type='button' onclick='funcao_pdf()'><i class ='fas fa-print'></i></button>

</div>
</div>
</div>
            </div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/candengue.js')}}"></script>
<script> 

function funcao_pdf() {
	
	var pegar_dados = document.getElementById('dados').innerHTML
	var janela = window.open('','','width=800,heigth=600')

	janela.document.write('<html><head>');
	janela.document.write('<title>PDF</title></head>');
  janela.document.write('<center>')
	janela.document.write(pegar_dados);
	janela.document.write('<hr>');

  janela.document.write('</center>')

	janela.document.write('</body></html>');

	janela.print();
}


</script>




@stop