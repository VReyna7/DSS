<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0?v=<?php echo time(); ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Investigacion complementaria 2</title>
</head>
<body>
	<?php //Esta cosa no tiene ninguna funcion en php pero pongo esto por si acaso xd?>
	<table class="table">
		<tr>
			<th>Variable</th>
			<th>Función</th>
			<th>Informacion</th>
		</tr>
		<tr>
			<td>String</td>
			<td>gettype(mixed $var)</td>
			<td>Devuelve el tipo de la variable PHP var. Para la comprobación de tipos, utilice las funciones is_*.</td>
		</tr>
		<tr>
			<td>boolean</td>
			<td>empty(mixed $var)</td>
			<td>Determina si una variable es considerada vacía. Una variable se considera vacía si no existe o si su valor es igual a false. empty() no genera una advertencia si la variable no existe.</td>
		</tr>
		<tr>
			<td>String</td>
			<td>get_resource_type(resource $handle)</td>
			<td>Esta función obtiene el tipo del recurso dado.</td>
		</tr>
		<tr>
			<td>boolean</td>
			<td>is_array(mixed $var)</td>
			<td>Comprueba si la variable es un array.</td>
		</tr>
		<tr>
			<td>boolean</td>
			<td>is_bool(mixed $var)</td>
			<td>Obtiene si la variable dada es un booleano.</td>
		</tr>
		<tr>
			<td>boolean</td>
			<td>is_float(mixed $var)</td>
			<td>Comprueba si el tipo de variable dado es float.</td>
		</tr>
		<tr>
			<td>boolean</td>
			<td>is_int(mixed $var)</td>
			<td>Comprueba si el tipo de variable dado es integer.</td>
		</tr>
		<tr>
			<td>boolean</td>
			<td>is_null(mixed $var)</td>
			<td>Comprueba si la variable dada es null.</td>
		</tr>
		<tr>
			<td>boolean</td>
			<td>is_object(mixed $var)</td>
			<td>Comprueba si la variable dada es un objeto.</td>
		</tr>
		<tr>
			<td>boolean</td>
			<td>isset(mixed $var, mixed $... = ?)</td>
			<td>Determina si una variable está definida y no es null.</td>
		</tr>
	</table>
</body>
</html>