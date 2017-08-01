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
<h1>Registro de Cliente </h1>
<form action="{{url('/guardarCli')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
	
	<div class="form-group">
		<label for="nombres">Nombres:</label>
		<input type="text" class="form-control" name="nombres" required>
	</div>

	<div class="form-group">
		<label for="apellidos">Apellidos:</label>
		<input type="text" class="form-control" name="apellidos" required>
	</div>

	<div class="form-group">
	<label for="ocupacion">Ocupación:</label>
		<select name="ocupacion" class="form-control">
				<option>ESTUDIANTE </option>
        <option>DOCENTE </option>
				<option>EMPLEADO </option>
				<option>EMPRESARIO </option>
				<option>AMA DE CASA </option>
				<option>PENSIONADO/JUBILADO </option>
		</select>
	</div>

	<div class="form-group">
		<label for="edad">Edad:</label>
		<input type="text" class="form-control" name="edad" required>
	</div>

	<div class="form-group">
      <label class="col-lg-2 control-label">Sexo:</label>
      <div class="col-lg-10">
        <div class="radio">
          <label for="sexo">
            <input type="radio" name="sexo" id="optionsRadios1" value="FEMENINO" checked="true">
            FEMENINO
          </label>
        </div>

        <div class="radio">
          <label for="sexo">
            <input type="radio" name="sexo" id="optionsRadios2" value="MASCULINO">
            MASCULINO
          </label>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Hijos:</label>
      <div class="col-lg-10">
        <div class="radio">
          <label for="sexo">
            <input type="radio" name="hijos" id="optionsRadios1" value="SI" checked="true">
            SI
          </label>
        </div>

        <div class="radio">
          <label for="sexo">
            <input type="radio" name="hijos" id="optionsRadios2" value="NO">
            NO
          </label>
        </div>
      </div>
    </div>

	<div class="form-group">
		<label for="correo">Correo:</label>
			<input type="text" class="form-control" name="correo" required>
	</div>

	<div class="form-group">
		<label for="telefono">Teléfono:</label>
		<input type="text" class="form-control" name="telefono" required>
	</div>

	<div class="form-group">
		<label for="domicilio">Domicilio:</label>
		<input type="text" class="form-control" name="domicilio" required>
	</div>

	<div class="form-group">
  <label for="pais">País:</label>
    <select name="pais" class="form-control">
        <option>MÉXICO </option>
        <option>ESTADOS UNIDOS </option>
    </select>
  </div>

  <div class="form-group">
  <label for="estado">Estado:</label>
    <select name="estado" class="form-control">
        <option>BAJA CALIFORNIA </option>
        <option>SONORA </option>
        <option>SINALOA </option>
        <option>NAYARIT </option>
        <option>JALISCO </option>
        <option>MICHOACÁN </option>
        <option>ESTADO DE MÉXICO </option>
        <option>ARIZONA </option>
        <option>CALIFORNIA </option>
    </select>
  </div>

	<div class="form-group">
		<label for="municipio">Municipio:</label>
		<input type="text" class="form-control" name="municipio" required>
	</div>

	<div>
		<button type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('/admin')}}" class="btn btn-danger">Cancelar</a>
	</div>	
</form>
@stop
