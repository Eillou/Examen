
<?php
include("conexion.php");
if (isset($_POST['register'])) {
    if (strlen($_POST['Usuario']) >= 1 && strlen($_POST['Contraseña']) >= 1 && strlen($_POST['Direccion']) >= 1 && strlen($_POST['Propietario']) >= 1  && strlen($_POST['cvv']) >= 1  && strlen($_POST['tar']) >= 1  && strlen($_POST['tel']) >= 1) {
	    $Usuario = trim($_POST['Usuario']);
	    $Contraseña = trim($_POST['Contraseña']);
		$Direccion = TRIM($_POST['Direccion']);
		$Propietario = TRIM($_POST['Propietario']);		
	    $cvv = TRIM($_POST['cvv']);		
        $tar= TRIM($_POST['Propietario']);		
      	
        $tel = TRIM($_POST['tel']);		
        	
	    $consulta = "INSERT INTO regi(usuario, contraseña, direccion, propietario, cvv, num_tar, num_tel) VALUES (' $Usuario',' $Contraseña','$Direccion','$Propietario','   $cvv ','$tar',' $tel')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3>¡Has enviado correctamente la información!</h3>
    		<button onclick="location.href='inicio.php'">Regresar a Página Principal</button>
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
