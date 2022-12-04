<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Estilo.css">
  <title>Formulario</title>
</head>
<body>
<form method="post">
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
        <td><input name="imagen" size="35" maxlength="100" type="file"></td>
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
              <td style="width: 10%;"><div class="boton">
                <input type="submit" name="register" value="Enviar Datos"/>
            </div>
          </td>
              <td style="width: 80%;"></td>
            </tr>
          </tbody>
        </table>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<?php 
include("registrar.php");
?>
</body>
</html>
