@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

</style>
@section('content_header')
    <h1></h1>
@stop
@section('content')

<div class="box">
 <div class="box">
    
    <div class="box-header">
Pagamento de Transporte
 </div>
<div class="box-body">
<button class='btn btn-primary' id='esconder'><i class='fas fa-arrow-circle-right'> </i></button>
<form>
@csrf
<label>Estudante</label>
<select id='candengue' name='candengue' required>
<option value=''>--------------</option>
@foreach ($candengues as $c )
<option value='{{$c->id}}' nome='{{$c->nome}}'>{{$c->nome}}</option>
@endforeach
</select>
<label>Mes</label>
<select id='mes' name=mes required>
<option value=''>---------------</option>
<option value='Janeiro'>Janeiro</option>
<option value='Fevereiro'>Fevereiro</option>
<option value='Março'>Março</option>
<option value='Abril'>Abril</option>
<option value='Maio'>Maio</option>
<option value='Junho'>Junho</option>
<option value='Julho'>Julho</option>
<option value='Agosto'>Agosto</option>
<option value='Setembro'>Setembro</option>
<option value='Outubro'>Outubro</option>
<option value='Novembro'>Novembro</option>
<option value='Dezembro'>Dezembro</option>
</select>
<label>Ponto de Partida</label>
<select id='transporte' name='transporte' required>
<option value=''>--------------</option>
@foreach ($transportes as $a)
<option value='{{$a->id}}' >{{$a->pontoPartida}}</option>

    
@endforeach



</select>
<input type='text' name='observacao' id='obs' placeholder='Observacao'>
<input type='hidden' id ='n'>
<input type='hidden' id='a' >
<button type='submit' id='s' class='btn btn-primary'><span><i class='fas fa-plus'></span></i></button>
</form>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
 </div>
 </div>

 </div>
 
 </div>
<div  id='pagamento'>
<hr class='tex-center'>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
<div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
<div class="col-sm-12 col-md-6"></div>
<div class="col-sm-12 col-md-6">
</div></div><div class="row">
<div class="col-sm-12">
<table id="tabela-pagamento" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nº</th>
<th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Browser: activate to sort column ascending">Nome</th>
<th class="sorting" tabindex="0" aria-controls="example2" aria-label="Browser: activate to sort column ascending">Mes</th>
<th class="sorting" tabindex="0" aria-controls="example2" aria-label="Browser: activate to sort column ascending">Ponto de Partida</th>
</tr>
</thead>
<tbody>


</tbody>

</table>
</div>

<button type='submit' id='pagar1'>Efectuar Pagamento</button><button type='button' id='imprimir'>Imprimir</button>
</section>
<center id='alerta'></center>
<script src='{{asset('js/jquery.min.js')}}'></script>

<script src='{{asset('js/transporte.js')}}'></script>
@stop