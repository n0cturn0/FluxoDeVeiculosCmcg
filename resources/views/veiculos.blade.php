@extends('adminlte::page')

@section('title', 'Sistema de apoio de controle de veículos')

@section('content_header')
    <h1>Informação do veículo</h1>
@stop

@section('content')

<form action="{{ route('insereveiculo') }}" method="POST" enctype="multipart/form-data">
 @csrf
    <div class="card-body">
        <h4>Selecione a Marca do Seu veículos</h4>
                <div class="form-group">
                  <select  name="marca" class="custom-select form-control-border" id="exampleSelectBorder">
                    <option>CHEVROLET</option>
                    <option>VOLKSWAGEN</option>
                    <option>FIAT</option>
                    <option>MERCEDES-BENZ</option>
                    <option>CITROEN</option>
                    <option>CHANA</option>
                    <option>HONDA</option>
                    <option>SUBARU</option>
                    <option>FERRARI</option>
                    <option>FORD</option>
                    <option>HIUNDAI</option>
                    <option>JAC</option>
                    <option>KIA</option>
                    <option>CHRYSLER</option>
                    <option>PEUGEOT</option>
                    <option>TOYOTA</option>
                    <option>RENAULT</option>
                    <option>AUDI</option>
                    <option>BMW</option>
                    <option>NISSAN</option>
                    <option>CHERY</option>
                    <option>VOLVO</option>
                    <option>SUZUKI</option>
                    <option>JEEP</option>
                    <option>LAND ROVER</option>
                    <option>MITSUBISHI</option>


                  </select>
                </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Modelo</label>
          <input type="text" name="modelo" class="form-control" id="exampleInputPassword1" placeholder="Qual o modelo do seu veículo?">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Ano de fabricação</label>
            <input type="text" name="anofabricacao" class="form-control" id="exampleInputPassword1" placeholder="Qual o ano de fabricação?">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Qual a cor</label>
            <input type="text" name="cor" class="form-control" id="exampleInputPassword1" placeholder="Qual a cor do seu veículo?">
          </div>

          <label for="exampleSelectBorder"><code>Atenção envie uma foto do documento do veículo</code></label>

          <div class="form-group">
            <label for="exampleInputFile">Enviar foto do documento do veículo</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" name="docveiculo" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Buscar foto</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
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
