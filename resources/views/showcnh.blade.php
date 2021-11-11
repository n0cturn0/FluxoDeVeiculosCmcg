@extends('adminlte::page')

@section('title', 'Sistema de apoio de controle de veículos')

@section('content_header')
    <h1>Informações para o ano de:  </h1>
    <hr>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Responsável</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    @foreach ($proprietario as $prop)
                     <p>
                    Nome do responsável:
                    </p>
                    <h3>{{ $prop->proprietario }}</h3>
                    <p>Cpf do responsável:</p>
                    <h3>{{ $prop->cpf }}</h3>
                    <p>Vencimento da cnh:</p>
                    <h3>{{ $prop->datavalidade }}</h3>
                    <p>Selo número:</p>
                    <h3>{{ $prop->selo }}</h3>
                      @endforeach
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <hr>
                  </div>
                </form>
              </div>
              <!-- /.card -->

              <!-- general form elements -->

              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Veículo</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    @foreach ($veiculo as $prop)
                     <p>
                   Marca:
                    </p>
                    <h3>{{ $prop->marca }}</h3>
                    <p>Modelo:</p>
                    <h3>{{ $prop->modelo }}</h3>
                      @endforeach
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <hr>
                  </div>
                </form>
              </div>
              <!-- /.card -->

              <!-- general form elements -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Aluno</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    @foreach ($aluno as $prop)
                     <p>
                   Nome completo
                    </p>
                    <h3>{{ $prop->nomeluno }}</h3>
                    <p>Nomde de Guerra:</p>
                    <h3>{{ $prop->nomedeguerra }}</h3>
                    <p>Série:</p>
                    <h3>{{ $prop->serie }}º</h3>
                    <hr>
                      @endforeach
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <hr>
                  </div>
                </form>
              </div>
              <!-- /.card -->

              <!-- general form elements -->

    </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
