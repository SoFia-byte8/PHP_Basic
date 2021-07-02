<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
</head>
<body>

</body>

<body>
	<container style="width: 100px;">
		<h1>Lista de productos</h1>
		<hr>
		<table>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Descripcion</th>
				</tr>
			</thead>

			<tbody>
				@foreach($tienda as $t)
					<tr>
								<td>{{$t->nombre}}</td>
								<td>{{$t->descripcion}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</container>

</body>

</html>