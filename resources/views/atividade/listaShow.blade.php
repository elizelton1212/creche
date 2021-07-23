@extends('adminlte::page')

@section('title', 'CaNdengues')

@section('content_header')

@stop

@section('content')


<h1><strong>{{$c->nome}}</strong></h1>
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
<table id="tabela-atividades" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Mes</th>
<th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Browser: activate to sort column ascending">Atividade</th>

</tr>
</thead>
<tbody>
@foreach($candengues as $a)
<tr>
<td>
{{$a->mes}}
</td>
<td>
{{$atividades->find($a->atividade_id)->descricao}}
</td>

</tr>    
@endforeach
</tbody>
</table>
 </div>
 </div>

 </div>
 
 </div>


@stop