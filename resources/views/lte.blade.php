@extends('adminlte::page')

@section('title', 'Sistema de apoio de controle de veículos')

@section('content_header')
    <h1>Informação Pessoal</h1>
@stop

@section('content')

<form action="{{ route('inserir') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Proprietário</label>
          <input type="text" name="proprietario" class="form-control" id="exampleInputEmail1" placeholder="Nome do proprietário">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Cpf</label>
          <input type="text" name="cpf" class="form-control cpf-mask" id="exampleInputPassword1" placeholder="CPF">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Telefone de para contato</label>
            <input type="text" name="telefone" class="form-control" id="exampleInputPassword1" placeholder="Número de Telefone">
          </div>
        <h4>CARTEIRA NACIONAL DE HABILITAÇÃO</h4>

        <label for="exampleSelectBorder"><code>Atenção envie uma foto da sua habilitação</code></label>

        <div class="form-group">
          <label for="exampleInputFile">Enviar foto da CNH</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="imagecnh" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Buscar foto</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text">Upload</span>
            </div>
          </div>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Digite da data de validade da sua CNH</label>
            <input type="date" name="datadevalidade" class="form-control" id="exampleInputPassword1" placeholder="CPF">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Digite o número do seu selo</label>
            <input type="text" name="selo" class="form-control" id="exampleInputPassword1" placeholder="Número do seu selo">
          </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
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
