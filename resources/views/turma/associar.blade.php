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
Associar Estudantes a Turma
 </div>
<div class="box-body">
<button class='btn btn-primary' id='esconder'><i class='fas fa-arrow-circle-right'> </i></button>
<form method='post'>
@csrf

<lable>Candengue</lable>
<select name='candengue' id='candengue'>
<option value=''>------------</option>
@foreach ($candengues as $c )
<option value='{{$c->id}}'>{{ $c->nome }}</option>
    
@endforeach


</select>


<label>Turma</label>
<select id='turma' name='turma' required>
<option value=''>--------------</option>
@foreach ($turmas as $a)
<option value='{{$a->id}}' >{{$a->descricao}}</option>

    
@endforeach



</select>
<button type='submit' id='save' class='btn btn-primary'><span><i class='fas fa-plus'></span></i></button>
</form>
<center id='alerta'></center>
<script src='{{asset('js/jquery.min.js')}}'></script>

<script src='{{asset('js/turma.js')}}'></script>
@stop