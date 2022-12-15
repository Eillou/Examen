<!DOCTYPE html>
<html>
<head>
    <title> Pipo</title> <b>
        <link rel="stylesheet" href="est.css"/>
</head>
<body>
    <header>
        <nav>
            <ul>
            <li ><a href="inicio.php">Inicio</a></li>
            <li ><a href="iniciar.php">Iniciar sesion</a></li>
            <li ><a href="registro.php">Registrarse</a></li>
            <li ><a href="compras.php">Comprar</a></l>      
            </ul>
        </nav>
      

    </header>
    <p class="bien">
        Bienvenido a la tienda online de Pipo donde podras encontrar gran variedad de productos basicos del hogar 
       </p>
       <br><br><br><br><br><br>
       <form  method="post">
        
       <fieldset>
         <legend> <mark>Iniciar sesión</mark></legend>
                <label  for="name">Usuario</label>
                <br>
                <input type="text" id="name" name="Usuario" placeholder="Usuario" required>
               <br>
               <label  for="name">Contraseña </label>
               <br>
               <input  type="password" id="name" name="Contraseña" placeholder="Contraseña" required>
               <br>
               <br>
               <input type="submit" value="Enviar">
                 
     </form>

</body>
</html>