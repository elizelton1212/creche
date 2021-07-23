@extends('adminlte::page')

@section('title',config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')
    

<div class="box">

    <div class="card card-primary">
   <div class="card-header">
   <h3 class="card-title">Editar dados do Transporte Selecionado</h3>
   </div>
   <div class='form-group'></div>
   <div class="card-body">
   
   <form >
   
   {!! csrf_field()!!}
   
<input type='hidden' name='id' value='{{ $transporte->id }}'>
<div class="input-group mb-3">
<label for="">Ponto de Partida</label><br>
<input type="text" name='pontoPartida' class="form-control" id='pontoPartida' placeholder="Ponto de Partida" value='{{$transporte->pontoPartida}}' >
<label for="">Ponto de Chegada</label><br>
<input type="text" name='pontoChegada' class="form-control" id='pontoChegada' placeholder="Ponto de Chegada" value='{{$transporte->pontoChegada}}' >
<label for="">Preço</label><br>
<input type="text" name='preco' class="form-control" id='preco' placeholder="Preco" value='{{$transporte->preco}}' >

</div>








   
<div class='text-center'><button type="submit" id="alterarDados" class="btn btn-primary">Alterar os dados</button></div>
<center id="r"></center>
   
   </form>

   
   <script src="{{asset('js/jquery.min.js')}}"></script>
   <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('js/messages_pt_PT.js')}}"></script>
   <script src="{{asset('js/transporte.js')}}"></script>


@endsection