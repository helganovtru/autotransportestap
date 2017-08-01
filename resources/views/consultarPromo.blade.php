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
@include('flash::message')
<h1>Lista de promociones TAP </h1>
<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Descripción</th>
      <th>Nombre Imagen</th>
			<th>Fecha de inicio</th>
			<th>Fecha de finalización</th>
			<th>-</th>
		</tr>
	</thead>
	<tbody>
	@foreach($promo as $p)
		<tr>
			<td>{{$p->id}}</td>
			<td>{{$p->descripcion}}</td>
      <td>{{$p->nombreimg}}</td>
			<td>{{$p->fecha_inicio}}</td>
			<td>{{$p->fecha_fin}}</td>
			<td>
        <a href="{{url('/enviarpromo')}}/{{$p->id}}" class="btn btn-xs btn-primary">
          <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
        </a>
				<a href="{{url('/editarPromo')}}/{{$p->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarPromo')}}/{{$p->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
	@endforeach
	</tbody>
</table>

<script type="text/javascript">
		setTimeout(function() 
		{
			$(".alert").fadeOut(1500);
		},1500);
</script>

@stop