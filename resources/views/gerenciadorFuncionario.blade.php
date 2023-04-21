@extends('padrao')

@section('content')
<div class="container mt-5">
<form method="get" action="{{route('gerenciar-funcionario')}}">
  <div class="mb-3 row">
    <label for="inputPesquisar" class="col-sm-2 col-form-label">Pesquisar:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nomefun" id="inputPesquisar" placeholder="Digite o nome do funcionário:">
    </div>
   
    <div class="col-sm-2"> <button type="button" class="btn btn-outline-secondary">Pesquisar</button> </div>
    
  </div>
</form>

<table class="table table-dark table-hover" >
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    @foreach($dadosfuncionario as $dadosfuncionarios)
    <tr>
      <th scope="row">{{$dadosfuncionarios->id}}</th>
      <td>{{$dadosfuncionarios->nomefun}}</td>
      <td>{{$dadosfuncionarios->emailfun}}</td>
      <td>X</td>
      <td>X</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection