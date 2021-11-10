@extends('adminlte::page')

@section('title', 'Sistema de apoio de controle de veículos')

@section('content_header')
    <h1>Informação Pessoal do Aluno</h1>
@stop

@section('content')

<form action="{{ route('inserealuno') }}" method="POST">
@csrf
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nome de guerra</label>
            <input type="text" name="nomedeguerra" class="form-control" id="exampleInputEmail1" placeholder="Nome do aluno">
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nome completo do Aluno</label>
          <input type="text" name="nomealuno" class="form-control" id="exampleInputEmail1" placeholder="Nome do aluno">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Número do Aluno</label>
          <input type="text" name="numerodoaluno" class="form-control" id="exampleInputPassword1" placeholder="Qual o número do aluno?">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Selecione a série do Aluno</label>
                <div class="form-group">
                  <select  name="serie" class="custom-select form-control-border" id="exampleSelectBorder">
                    <option value="6">6º Ano</option>
                    <option value="7">7 Ano</option>
                    <option value="8">8º Ano</option>
                    <option value="9">9º Ano</option>
                    <option value="1">1º Ano</option>
                    <option value="2">2º Ano</option>
                    <option value="3">3º Ano</option>
                  </select>
          </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cadastrar Aluno</button>
      </div>
    </form>
  </div>
  <!-- /.card -->




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


