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
Listar Turma
 </div>
<div class="box-body">
<form method='post' action='{{ url('listar') }}'>
@csrf



<label>Turma</label>
<select id='turma' name='turma' required>
<option value=''>--------------</option>
@foreach ($turmas as $a)
<option value='{{$a->id}}' >{{$a->descricao}}</option>

    
@endforeach



</select>
<button type='submit'  class='btn btn-primary'><span><i class='fas fa-plus'></span></i></button>
</form>
<center id='alerta'></center>
<script src='{{asset('js/jquery.min.js')}}'></script>

<script src='{{asset('js/turma.js')}}'></script>
@stop