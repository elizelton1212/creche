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
Estudantes com dividas no respectivo Mes
 </div>
<div class="box-body">
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
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">#</th>
<th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Browser: activate to sort column ascending">Nome</th>
<th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Browser: activate to sort column ascending">Mes</th>

</tr>
</thead>
<tbody>
@php
  $n=1;
@endphp
@foreach ($prop as $k )
@php
     $candengue = $candengue->find($k->candengue_id);
@endphp

<tr>

<td>{{ $n }}</td>
<td>{{ $candengue->nome}} </td>
<td>{{ $mes }}</td>

</tr>
@php
  $n++;
@endphp    
@endforeach

</tbody>

</table>
<button type='button' class=' btn btn-dark' id='imprimir' ><i class='fas fa-print'></i></button>
</div>

</section>
<center id='alerta'></center>
<script src='{{asset('js/jquery.min.js')}}'></script>

<script src='{{asset('js/propina.js')}}'></script>
@stop