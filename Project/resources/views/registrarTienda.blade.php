<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<h1>Registrar Producto</h1>

<form method="post" action="{{ url('tienda/store') }}" >
	@csrf
	nombre: <input name="nom">
	<br>
	descripcion: <input  name="des">
	<br>
	<button>
		Guardar
	</button>
</form>


</body>
</html>