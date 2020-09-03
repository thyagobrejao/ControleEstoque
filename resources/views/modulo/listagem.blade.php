@extends('adminlte::page')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6 col-md-3">
      <div class="panel panel-info">
        <div class="panel-heading">
          Vendas
        </div>
        <div class="panel-body">
          <div class="btn-group-vertical btn-block">
            <a class="btn btn-info" href="{{ route('Cadastrar Venda') }}">Cadastrar Venda</a>
            <a class="btn btn-info" href="{{ route('Listar Vendas') }}">Listar Vendas</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="panel panel-info">
        <div class="panel-heading">
          Produto
        </div>
        <div class="panel-body">
          <div class="btn-group-vertical btn-block">
            <a class="btn btn-info" href="{{ route('Listar Produtos') }}">Listar Produtos</a>
            <a class="btn btn-info" href="{{ route('Cadastrar Produto') }}">Cadastrar Produto</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="panel panel-info">
        <div class="panel-heading">
          Destaque
        </div>
        <div class="panel-body">
          <div class="btn-group-vertical btn-block">
            <a class="btn btn-info" href="{{ route('Listar Destaques') }}">Listar Destaques</a>
            <a class="btn btn-info" href="{{ route('Listar GrupoProdutos') }}">Listar Grupo Produto</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="panel panel-info">
        <div class="panel-heading">
          Entrada
        </div>
        <div class="panel-body">
          <div class="btn-group-vertical btn-block">
            <a class="btn btn-info" href="{{ route('Cadastrar Entrada') }}">Cadastrar Entrada</a>
            <a class="btn btn-info" href="{{ route('Listar Entradas') }}">Listar Entradas</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="panel panel-info">
        <div class="panel-heading">
          Saída
        </div>
        <div class="panel-body">
          <div class="btn-group-vertical btn-block">
            <a class="btn btn-info" href="{{ route('Listar Saidas') }}">Listar Saídas</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="panel panel-info">
        <div class="panel-heading">
          Cliente
        </div>
        <div class="panel-body">
          <div class="btn-group-vertical btn-block">
            <a class="btn btn-info" href="{{ route('Cadastrar Cliente') }}">Cadastrar Cliente</a>
            <a class="btn btn-info" href="{{ route('Listar Clientes') }}">Listar Clientes</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="panel panel-info">
        <div class="panel-heading">
          Relatório
        </div>
        <div class="panel-body">
          <div class="btn-group-vertical btn-block">
            <a class="btn btn-info"  href="{{ route('Listar Relatorios') }}">Listar Relatorios</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
