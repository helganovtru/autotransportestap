<!DOCTYPE html>
<html>
<head>
	<title>Listado de Administradores</title>
</head>
<body>
	<h1>TAP - Transportes y Autobuses del Pacífico</h1>
	<h2>Listado de Administradores: </h2>
	<hr>
	<table>
	@foreach($admin as $a)
		<tr>
			<td>{{$a->id}}</td>
			<td>{{$a->nombre}}</td>
		</tr>
	@endforeach
</table>
</body>
</html>