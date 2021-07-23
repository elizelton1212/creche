@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')

@stop

@section('content')


<div class="box">
  <center> <img src='{{asset('img/logo1.png')}}' style='max-width: 150px'></center>
    
    <div class="box-header">
    <center>Matricula <br>Ano:{{ date('Y') }}</center>
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

<table id="tabela-fornecedor" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Estudante</th>
</tr>
</thead>
<tbody>
<tr>
<td>{{$candengue->nome}}</td>
</tr>
</tbody>
</table>  
O Atendente<br>
<u>{{ Auth::user()->name }}<u>

</div>
</div>
</div>
</div>
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/candengue.js')}}"></script>

<script>


  window.addEventListener("load", window.print());
</script>

@stop