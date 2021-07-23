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
<h1>Confirmação de Matriculas</h1>
 </div>
<div class="box-body">

<form action ='{{ url('confirmacaoFactura') }}'>
@csrf
<label>Estudante</label>
<select id='Candengue' name ='candengue' >
<option value=''>--------------</option>
@foreach ($candengues as $c )
<option value='{{$c->id}}' nome='{{$c->nome}}'>{{$c->nome}}</option>
@endforeach
</select>
<input type='hidden' id ='n'>
<input type='hidden' id='a' >
<button type='submit' id='s' class='btn btn-primary'><span><i class='fas fa-plus'></span></i></button>
</form>
<button type='button' id='pagar'>Efectuar Pagamento</button><button type='button' id='remover'>Limpar</button>
</section>
<center id='alerta'></center>
<script src='{{asset('js/jquery.min.js')}}'></script>

<script src='{{asset('js/propina.js')}}'></script>
@stop