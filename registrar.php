<?php 

include("con_db.php");


if (isset($_POST['register'])) {
    if (strlen($_POST['titulo']) >= 1 && strlen($_POST['autor']) >= 1 && strlen($_POST['imagen']) >= 1 && strlen($_POST['descrip']) >= 1) {
	    $titulo = trim($_POST['titulo']);
	    $autor = trim($_POST['autor']);
		$imagen = TRIM($_POST['imagen']);
		$descrip = TRIM($_POST['descrip']);		
	    $fechareg = date("y/m/d");
	    $consulta = "INSERT INTO register(titulo, autor, imagen, descrip, fecha_reg) VALUES ('$titulo','$autor','$imagen','$descrip','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3>¡Has enviado correctamente la información!</h3>
    		<button onclick="location.href='PaginaPrincipal.php'">Regresar a Página Principal</button>
           <?php
	    } else {
	    	?> 
	    	<h3>¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3>¡Por favor complete los campos!</h3>
           <?php
    }
}

?>