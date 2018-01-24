@extends('layout.principal')
@section('conteudo')
<div class="container">
  <h2>Entradas</h2>
  <ul class="nav navbar-nav">
    <li><a href="{{action('EntradaController@novo')}}">Lançar Entrada</a></li>
  </ul>  

  @if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
      {!! session('message.content') !!}
    </div>
  @endif

  <table id="listagem" class="table table-bordered">
    <thead>
      <tr>
        <th>Código Produto</th>
        <th>Descrição</th>
        <th>Valor</th>
        <th>Data</th>
        <th>Quantidade</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>
      @foreach($produtos as $p)
        <tr>
          <td>{{ $p->codigo_produto }}</td>
          <td>{{ $p->descricao }}</td>
          <td>R$ {{ $p->valor }}</td>
          <td>{{ date('d/m/Y', strtotime($p->created_at)) }}</td>
          <td>{{ $p->quantidade }}</td>
          <td><a href="/ListarEntrada/mostrar/{{ $p->id_entrada }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
          <td><a href="/ListarEntrada/remove/{{ $p->id_entrada }}"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop