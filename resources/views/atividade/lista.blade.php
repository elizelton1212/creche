@extends('adminlte::page')

@section('title', 'CaNdengues')

@section('content_header')

@stop

@section('content')


<div class="box">
    
    <div class="box-header">
Lista de Pagamentos
 </div>
<div class="box-body">

<section class="content">
      <div class="container-fluid">
        <div class="row">
      <!-- /.card-header -->
<form method='post' action='{{ url('divida') }}'>
@csrf
<lable> Mes </lable>  
<select name ='mes' required>
<option value=''>----------</option>
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
<lable>Atividade</lable>
<select name='atividade' required>
<option value=''>----------</option>
@foreach ($atividade as $a )
    <option value ='{{ $a->id }}'>{{ $a->descricao }}</option>
@endforeach
</select>
<button type='submit' class='btn btn-primary'><i class='fas fa-search'></i></button>


</form>
</div></div><div class="row">
</div>
</div>
</div>
@stop