@extends('master')

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
             <a class="navbar-brand" href="{{url('/')}}">TAP
             </a>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-right" role="search">
            <a href="{{url('registrame')}}" class="btn btn-info">Registrarme!</a>
      </form>
  </div>
  @include('flash::message')
  <img src="imagenesTAP/eligetudestino.png" alt="" height="78%">
</nav>


@section('contenido')

<script type="text/javascript">
    setTimeout(function() 
    {
      $(".alert").fadeOut(1500);
    },1500);
</script>
@stop