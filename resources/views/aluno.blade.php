@extends('adminlte::page')

@section('title', 'Sistema de apoio de controle de veículos')

@section('content_header')
    <h1>Informação Pessoal do Aluno</h1>
@stop

@section('content')


    <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nome completo do Aluno</label>
          <input type="text" name="nomealuno" class="form-control" id="exampleInputEmail1" placeholder="Nome do aluno">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Número do Aluno</label>
          <input type="text" name="numerodoaluno" class="form-control" id="exampleInputPassword1" placeholder="Qual o número do aluno?">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Série do aluno</label>
            <input type="text" name="numerodoaluno" class="form-control" id="exampleInputPassword1" placeholder="Qual a série do aluno?">
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

@section('js')
    <script> console.log('Hi!'); </script>
@stop
