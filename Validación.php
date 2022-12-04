<?php
// Inicializamos una variable interruptor a cero.
// Dicha variable no cambiará de valor, a no ser que se produzca un error.
$error=0;
// Comprobamos el valor de submit
if (!empty($submit)) { 
// Comprobamos que no exista ningún campo vacío, ya que, todos son obligatorios
if(!(empty($titulo) || empty($autor) || empty ($imagen) || empty($descrip))) {
// Comprobamos que el tamaño de los campos es inferior al máximo permitido
if(strlen($titulo) < 51 && strlen($autor) < 51 && strlen($imagen) < 101 && strlen($descrip) <1000) {
// Agrupamos los datos introducidos
$articulo="$titulo $autor\n$imagen\n$descrip";
$articulo=htmlspecialchars($mensaje); // Enmascaramos los caracteres especiales de HTML
$articulo=stripslashes($mensaje); // Eliminamos las barras invertidas
// Enviamos el mensaje
if(mail("sunombre@sudominio.com", "Mensaje de $titulo $autor desde el Formulario", "$articulo")) {
?>
OK. Su mensaje se ha enviado correctamente.
<?php
}
else { // Si algo falla: ERROR
$error=1;
?>
ERROR: Su mensaje no se ha podido enviar por un problema en el servidor.
<?php
}
}
else { // Si el tamaño de los campos es excesivo: ERROR
$error=1;
?>
ERROR: EL tamaño del mensaje no puede ser superior a 1000 caracteres.<br><br>
<?php
}
}
else { // Si el e-mail no es válido: ERROR
$error=1;
?>
ERROR: El e-mail no es correcto.<br><br>
<?php
}
}
else { // Si hay algún campo vacío: ERROR
$error=1;
?>
ERROR: Todos los campos son obligatorios.<br><br>
<?php
}
if ($error)
{
?>
<form>
<input type="button" value="Repositorio de artículos" 
onclick="location.href='PaginaPrincipal.php'">
</form>
<!-- Consejo de seguridad, visible sólo para usuarios sin JavaScript: -->
<noscript>Utilice el BOTON ATRAS del navegador para volver</noscript>
<?php
}
else { //Si submit está vacío: ERROR
?>
ERROR: Para enviar datos acceda a <a href="Formulario.php">Añadir Artículo</a>
<?php
}
?>