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
             <a class="navbar-brand" href="{{url('/admin')}}">TAP
             </a>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Registrar <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/registrarCliente')}}">Clientes</a></li>
            <li><a href="{{url('/registrarAdministrador')}}">Administrador</a></li>
            <li><a href="{{url('/registrarPromocion')}}">Promoción</a></li>
          </ul>
        </li>

        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Consultar <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/consultarClientes')}}">Clientes</a></li>
            <li><a href="{{url('/consultaAdministradores')}}">Administradores</a></li>
            <li><a href="{{url('/consultarPromo')}}">Promociones</a></li>
          
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


@section('contenido')
<h1>Modificar Cliente</h1>
<form action="{{url('/actualizarPromo')}}/{{$promo->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
	
	<div class="form-group">
		<label for="descripcion">Descripción:</label>
		<input type="text" class="form-control" name="descripcion" required value="{{$promo->descripcion}}">
	</div>

	<div class="form-group">
		<label for="fecha_inicio">Fecha de inicio:</label>
		<input type="date" class="form-control" name="fecha_inicio" required value="{{$promo->fecha_inicio}}">
	</div>

	<div class="form-group">
		<label for="fecha_fin">Fecha de finalización:</label>
		<input type="date" class="form-control" name="fecha_fin" required value="{{$promo->fecha_fin}}">
	</div>

<!--
  <div class="form-group">
    <label for="nombreimg">Subir Imagen:</label>
    <input type="file" name="nombreimg" accept="image/*" />
  </div>
-->
	
	<div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>
@stop