<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Estilo.css">
    <title>Mis artículos</title>
</head>
<body>
    <h3>Repositorio de artículos</h3>
    <form action="Formulario.php">
    <br>
    <button onclick="location.href='Formulario.php'">Agregar artículo</button>
 </form> 
 <hr> 
	<table class="Estilo1">
		<tr>
			<td>Id</td>
			<td>Titulo</td>
			<td>Autor</td>
			<td>Imagen</td>
			<td>Descripción</td>
			<td>Fecha de registro</td>			
		</tr>

		<?php
         include("registrar.php");
         include("con_db.php");
        $con = $conex;
		$sqli="SELECT id, titulo, autor, imagen, descrip, fecha_reg FROM register WHERE 1";
		$result=mysqli_query($con,$sqli);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['titulo'] ?></td>
			<td><?php echo $mostrar['autor'] ?></td>
			<td><?php echo $mostrar['imagen'] ?></td>
			<td><?php echo $mostrar['descrip'] ?></td>
			<td><?php echo $mostrar['fecha_reg'] ?></td>			
		</tr>
	<?php 
	}
	 ?>
	</table>
</body>
</html>