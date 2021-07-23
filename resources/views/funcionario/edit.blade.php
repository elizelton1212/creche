@extends('adminlte::page')

@section('title',config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')
    

<div class="box">

    <div class="card card-primary">
   <div class="card-header">
   <h3 class="card-title">Editar dados do Funcionario Selecionado</h3>
   </div>
   <div class='form-group'></div>
   <div class="card-body">
   
   <form method='post'>
   
   {!! csrf_field()!!}
<div class="input-group mb-3">
<input type='hidden' name='id' value='{{ $funcionario->id}}'>
<label for="">Nome</label><br>
<input type="text" name='nome' class="form-control" id='nome' placeholder="Nome" value='{{$funcionario->nome}}' >
</div>

<div class="input-group mb-3">
<label for="">genero</label><br>
Masculino<input type="radio" name='genero' class="form-control" value='Masculino' >
Femenino<input type="radio" name='genero' class="form-control" value='Femenino' >
</div>

<div class="input-group mb-3">
<label for="">Estado Ciivil</label><br>
Casado(a)<input type="radio" name='estadoCivil' class="form-control" value='Masculino' >
Solteiro(a)<input type="radio" name='estadoCivl' class="form-control" value='Femenino' >
</div>
<div class="input-group mb-3">
<label for="">BI</label><br>
<input type="text" name='nBi' class="form-control" id='nBi' placeholder="BI" value='{{$funcionario->nBi}}'>
</div>

<div class="input-group mb-3">
<label for="">INSS</label><br>
<input type="text" name='inss' class="form-control" id='inss' placeholder="INSS" value='{{$funcionario->inss}}' >
</div>


                          <div class="form-group">
                            <label for="exampleInputPassword1">Nacionalidade</label>
                           <select class='input-group input-group-lg mb-3' name="nacionalidade" id="nacionalidade">
                            <option value={{ $funcionario->nacionalidade }}>{{ $funcionario->nacionalidade }}</option>
                           <option value="Angola">Angola</option>
                           <option value="Africa do Sul">Africa do Sul</option>
                           <option value="Brazil">Brazil</option>
                           <option value="Portugal">Portugal</option>
                           </select><div id='alertnacionalidade'></div>
                          </div>
<div class="input-group mb-3">
<label for="">Iban</label><br>
<input type="text" name='iban' class="form-control" id='iban' placeholder="Iban" value='{{$funcionario->iban}}'>
</div>

<div class="input-group mb-3">
<label for="">Salario Liquido</label><br>
<input type="number" name='salarioLiquido' class="form-control" id='salarioLiquido' placeholder="Salario Liquido" value='{{$funcionario->salarioLiquido}}'>
</div>

<div class="input-group mb-3">
<label for="">Salario Bruto</label><br>
<input type="number" name='salarioBruto' class="form-control" id='salarioBruto' placeholder="Salario Bruto" value='{{$funcionario->salarioBruto}}' >
</div>



   
<div class='text-center'><button type="submit" id="alterarFuncionario" class="btn btn-primary">Alterar os dados</button></div>
<center id="r"></center>
   
   </form>

   
   <script src="{{asset('js/jquery.min.js')}}"></script>
  
   <script src="{{asset('js/funcionario.js')}}"></script>


@endsection