@extends('adminlte::page')

@section('title', 'Sistema de apoio de controle de veículos')

@section('content_header')
    <h1>Painel de controle </h1>
    <hr>
@stop

@section('content')



<div class="card-body">

 <!-- Info boxes -->
 <div class="row">
    @if($status == 0)
    <div class="col-12 col-sm-6 col-md-3">

      <div class="info-box">

        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-exclamation-triangle"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">CNH</span>
          <span class="info-box-number">
            Falta enviar CNH
          </span>
        </div>

        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>

    <!-- /.col -->
    @elseif ($status != 0)
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">CNH </span>
          <span class="info-box-number">ATUALIZADA</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    @endif
    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>



    <!-- /.col -->
  </div>
  <!-- /.row -->

</div>





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
