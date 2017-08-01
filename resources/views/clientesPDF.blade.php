<!DOCTYPE html>
<html>
<head>
	<title>Listado de Clientes</title>
</head>
<body>
	<h1>TAP - Transportes y Autobuses del Pacífico</h1>
	<h2>Listado de Clientes: </h2>
	<hr>
	<table>
	@foreach($cliente as $c)
		<tr>
			<td>{{$c->id}}</td>
			<td>{{$c->nombres}} {{$c->apellidos}}</td>
			<td>{{$c->municipio}}, {{$c->estado}}, {{$c->pais}}</td>
	@endforeach
	</table>
</body>
</html>