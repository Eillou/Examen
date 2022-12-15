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
       <form  method="post" >
        
       <fieldset>
         <legend> <mark>Registrarse</mark></legend>
               <label  for="name">Usuario</label>
               <br>
               <input type="text"  name="Usuario" placeholder="Usuario" required>
               <br><br>
               <label  for="name">Contraseña </label>
               <br>
               <input  type="password" id="name" name="Contraseña" placeholder="Contraseña" required>
               <br><br>
               <label for="msg">Direccion</label>
               <br>
               <input type="text" id="text" name="Direccion" placeholder="Direccion" required>
               <div class="pago">
                    <br>
                    <div class="dueño">
                        <label for="Dueño">Propietario</label>
                        <br>
                        <input type="text" class="control" id="Dueño" name="Propietario" placeholder="Nombre">
                    </div>
                    <br>
                    <div class="CVV">
                        <label for="cvv" placeholder="CVV">CVV</label>
                        <br>
                        <input type="number" maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="control" id="cvv" name="cvv"  placeholder="cvv">
                    </div>
                    <br>
                    <div class="grupo" id="cardNumber">
                        <label for="cardNumber">Número de tarjeta</label>
                        <br>
                        <input type="number" name="tar" maxlength="16" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" id="cardNumber" placeholder="Tarjeta">
                    </div>
                    <br>
                    <div class="grupo" id="fecha"  name="fecha">
                        <label>Fecha de expiración</label>
                        <br>
                        <select>
                            <option value="01">Enero</option>
                            <option value="02">Febrero</option>
                            <option value="03">Marzo</option>
                            <option value="04">Abril</option>
                            <option value="05">Mayo</option>
                            <option value="06">Junio</option>
                            <option value="07">Julio</option>
                            <option value="08">Agosot</option>
                            <option value="09">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Deciembre</option>
                        </select>
                        <select>
                            <option value="16"> 2016</option>
                            <option value="17"> 2017</option>
                            <option value="18"> 2018</option>
                            <option value="19"> 2019</option>
                            <option value="20"> 2020</option>
                            <option value="21"> 2021</option>
                            <option value="22"> 2022</option>
                            <option value="23"> 2023</option>
                            <option value="24"> 2024</option>
                            <option value="25"> 2025</option>
                            <option value="26"> 2026</option>
                            <option value="27"> 2027</option>
                            <option value="28"> 2028</option>
                        </select>
                    </div>
               <br>
               <label for="msg">Número de teléfono</label>
               <br>
               <input type="tel"  name="tel" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" name="num" required placeholder="Teléfono +52">              
               <br>
               <br>
               <input type="submit" value="Enviar" name="register">
                 
     </form>
     <?php
include("val.php");


?>
</body>
</html>