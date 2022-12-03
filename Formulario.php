<!DOCTYPE html PUBLIC>
<html>
<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
</head>
<body>
<form action="validacion.php" method="post">
  <table width: 100%;cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td></td>
        <td>Todos los campos son obligatorios:</td>
      </tr>
      <tr>
        <td>Título:</td>
        <td><input name="titulo" size="35" maxlength="50" type="text"></td>
      </tr>
      <tr>
        <td>Nombre del autor:</td>
        <td><input name="autor" size="35" maxlength="50" type="text"></td>
      </tr>
      <tr>
        <td>Imagen:</td>
        <td><input name="imagen" size="35" maxlength="100" type="text"></td>
      </tr>
      <tr>
        <td>Descripción:</td>
        <td><textarea name="descrip" cols="50" rows="5" wrap="soft"></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td> 
        <table width: 100%; cellpadding="2" cellspacing="2">
          <tbody>
            <tr>
              <td style="width: 10%;"><input name="reset" value="Borrar datos" type="reset"></td>
              <td style="width: 10%;"><input name="submit" value="Enviar datos" type="submit"></td>
              <td style="width: 80%;"></td>
            </tr>
          </tbody>
        </table>
        </td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>
<?php
$mysqli = new mysqli("localhost", "usuario", "contraseña", "basedatos");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "usuario", "contraseña", "basedatos", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
?>