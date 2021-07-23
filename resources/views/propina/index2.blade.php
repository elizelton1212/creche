@extends('adminlte::page')

@section('title',config('adminlte.title', 'Falhou'))

@section('content_header')

@stop

@section('content')
 <div class="box">
 <div class="box">
    
    <div class="box-header">
Consulta de Propinas
 </div>
<div class="box-body">
<form method='post' action='{{url('consulta')}}'>
@csrf

<label>Mes</label>
<select id='Mes' name='mes' required>
<option value=''>---------------</option>

@foreach ($propinas as $p )

    <option value='{{$p->id}}'>{{ $p->mes }}</option>
@endforeach
</select>
<input type='text' id ='n' name='ano' placeholder='Ano' required>
<input type='hidden' id ='n'>
<input type='hidden' id='a' >
<button type='submit' id='s' class='btn btn-primary'><span><i class='fas fa-search'></span></i></button>
</form>
@stop