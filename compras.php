<!DOCTYPE html>
<html>
<head>
    <title> Pipo</title> <b>
        <link rel="stylesheet" href="est.css"/>
</head>
<body>
    <header>
        <nav>
            <ul></ul>
            <ul>
            <li ><a href="inicio.php">Inicio</a></li>
            <li ><a href="#Cocina">Cocina</a></li>
            <li ><a href="#Terraza">Terraza</a></li>
            <li ><a href="#Dormitorio">Dormitorio</a></l>     
            </ul>
        </nav>

    </header>
    <p class="bien">
        Bienvenido a la tienda online de Pipo donde podras encontrar gran variedad de productos basicos del hogar 
    </p>
     
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <br>    <br>    <br>
    <a class="LINK" name="Cocina" id="Cocina">Cocina</a>
    <script>

        document.addEventListener('DOMContentLoaded', () => {
          // Variables
          const baseDeDatos = [
              {
                  id: 1,
                  nombre: 'Sartén',
                  precio: 299.99,
                  imagen: 'Imagenes/Cocina/Sarten.jfif'
              },
              {
                  id: 2,
                  nombre: 'Juego de Utensilios',
                  precio: 499.99,
                  imagen: 'Imagenes/Cocina/Utensilios.jpg'
              },
              {
                  id: 3,
                  nombre: 'Juego de Cubiertos',
                  precio: 249.99,
                  imagen: 'Imagenes/Cocina/Cubiertos.jfif'
              },
              {
                  id: 4,
                  nombre: 'Olla',
                  precio: 349.99,
                  imagen: 'Imagenes/Cocina/Olla.jfif'
              },
              {
                  id: 5,
                  nombre: 'Cuchillos',
                  precio: 199.99,
                  imagen: 'Imagenes/Cocina/Cuchillos.jfif'
              },
              {
                  id: 6,
                  nombre: 'Licuadora',
                  precio: 699.99,
                  imagen: 'Imagenes/Cocina/Licuadora.jfif'
              },
              {
              id: 7,
              nombre: 'Maceta',
              precio: 99.99,
              imagen: 'Imagenes/Terraza/Maceta.jfif'
          },
          {
              id: 8,
              nombre: 'Gnomo de jardín',
              precio: 999.99,
              imagen: 'Imagenes/Terraza/Gnomo.jfif'
          },
          {
              id: 9,
              nombre: 'Silla',
              precio: 549.99,
              imagen: 'Imagenes/Terraza/Silla.jfif'
          },
          {
              id: 10,
              nombre: 'Podadora',
              precio: 3149.99,
              imagen: 'Imagenes/Terraza/Podadora.jfif'
          },
          {
              id: 11,
              nombre: 'Sombrilla',
              precio: 1999.99,
              imagen: 'Imagenes/Terraza/Sombrilla.jfif'
          },
          {
              id: 12,
              nombre: 'Surtido de semillas',
              precio: 99.99,
              imagen: 'Imagenes/Terraza/Semillas.jpg'
          },
              {
              id: 13,
              nombre: 'Mesa',
              precio: 699.99,
              imagen: 'Imagenes/Dormitorio/Mesa.jfif'
          },
          {
              id: 14,
              nombre: 'Tocador',
              precio: 1299.99,
              imagen: 'Imagenes/Dormitorio/Tocador.jfif'
          },
          {
              id: 15,
              nombre: 'Escritorio',
              precio: 949.99,
              imagen: 'Imagenes/Dormitorio/Escritorio.jfif'
          },
          {
              id: 16,
              nombre: 'Cama',
              precio: 3149.99,
              imagen: 'Imagenes/Dormitorio/Cama.jfif'
          },
          {
              id: 17,
              nombre: 'Alfombra',
              precio: 499.99,
              imagen: 'Imagenes/Dormitorio/Alfombra.jfif'
          },
          {
              id: 18,
              nombre: 'Set de cuadros',
              precio: 5999.99,
              imagen: 'Imagenes/Dormitorio/Cuadros.jfif'
          },
          ];

          let carrito = [];
          const divisa = '$';
          const DOMitems = document.querySelector('#items');
          const DOMcarrito = document.querySelector('#carrito');
          const DOMtotal = document.querySelector('#total');
          const DOMbotonVaciar = document.querySelector('#boton-vaciar');

          // Funciones

          function renderizarProductos() {
              baseDeDatos.forEach((info) => {
                  // Estructura
                  const miNodo = document.createElement('div');
                  miNodo.classList.add('card', 'col-sm-4');
                  // Body
                  const miNodoCardBody = document.createElement('div');
                  miNodoCardBody.classList.add('card-body');
                  // Titulo
                  const miNodoTitle = document.createElement('h5');
                  miNodoTitle.classList.add('card-title');
                  miNodoTitle.textContent = info.nombre;
                  // Imagen
                  const miNodoImagen = document.createElement('img');
                  miNodoImagen.classList.add('img-fluid');
                  miNodoImagen.setAttribute('src', info.imagen);
                  // Precio
                  const miNodoPrecio = document.createElement('p');
                  miNodoPrecio.classList.add('card-text');
                  miNodoPrecio.textContent = `${info.precio}${divisa}`;
                  // Boton 
                  const miNodoBoton = document.createElement('button');
                  miNodoBoton.classList.add('btn', 'btn-primary');
                  miNodoBoton.textContent = '+';
                  miNodoBoton.setAttribute('marcador', info.id);
                  miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);
                  // Insertamos
                  miNodoCardBody.appendChild(miNodoImagen);
                  miNodoCardBody.appendChild(miNodoTitle);
                  miNodoCardBody.appendChild(miNodoPrecio);
                  miNodoCardBody.appendChild(miNodoBoton);
                  miNodo.appendChild(miNodoCardBody);
                  DOMitems.appendChild(miNodo);
              });
          }

          function anyadirProductoAlCarrito(evento) {
              // Anyadimos el Nodo a nuestro carrito
              carrito.push(evento.target.getAttribute('marcador'))
              // Actualizamos el carrito 
              renderizarCarrito();

          }

          function renderizarCarrito() {
              // Vaciamos todo el html
              DOMcarrito.textContent = '';
              // Quitamos los duplicados
              const carritoSinDuplicados = [...new Set(carrito)];
              // Generamos los Nodos a partir de carrito
              carritoSinDuplicados.forEach((item) => {
                  // Obtenemos el item que necesitamos de la variable base de datos
                  const miItem = baseDeDatos.filter((itemBaseDatos) => {
                      // ¿Coincide las id? Solo puede existir un caso
                      return itemBaseDatos.id === parseInt(item);
                  });
                  // Cuenta el número de veces que se repite el producto
                  const numeroUnidadesItem = carrito.reduce((total, itemId) => {
                      // ¿Coincide las id? Incremento el contador, en caso contrario no mantengo
                      return itemId === item ? total += 1 : total;
                  }, 0);
                  // Creamos el nodo del item del carrito
                  const miNodo = document.createElement('li');
                  miNodo.classList.add('list-group-item', 'text-right', 'mx-2');
                  miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0].nombre} - ${miItem[0].precio}${divisa}`;
                  // Boton de borrar
                  const miBoton = document.createElement('button');
                  miBoton.classList.add('btn', 'btn-danger', 'mx-5');
                  miBoton.textContent = 'X';
                  miBoton.style.marginLeft = '1rem';
                  miBoton.dataset.item = item;
                  miBoton.addEventListener('click', borrarItemCarrito);
                  // Mezclamos nodos
                  miNodo.appendChild(miBoton);
                  DOMcarrito.appendChild(miNodo);
              });
             // Renderizamos el precio total en el HTML
             DOMtotal.textContent = calcularTotal();
          }

          function borrarItemCarrito(evento) {
              // Obtenemos el producto ID que hay en el boton pulsado
              const id = evento.target.dataset.item;
              // Borramos todos los productos
              carrito = carrito.filter((carritoId) => {
                  return carritoId !== id;
              });
              // volvemos a renderizar
              renderizarCarrito();
          }


          function calcularTotal() {
              // Recorremos el array del carrito 
              return carrito.reduce((total, item) => {
                  // De cada elemento obtenemos su precio
                  const miItem = baseDeDatos.filter((itemBaseDatos) => {
                      return itemBaseDatos.id === parseInt(item);
                  });
                  // Los sumamos al total
                  return total + miItem[0].precio;
              }, 0).toFixed(2);
          }

          /**
          * Varia el carrito y vuelve a dibujarlo
          */
          function vaciarCarrito() {
              // Limpiamos los productos guardados
              carrito = [];
              // Renderizamos los cambios
              renderizarCarrito();
          }

          // Eventos
          DOMbotonVaciar.addEventListener('click', vaciarCarrito);

          // Inicio
          renderizarProductos();
          renderizarCarrito();
        });
    </script><br>
    <a class="LINK2" name="Terraza" id="Terraza">Terraza</a>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Elementos generados a partir del JSON -->
            <main id="items" class="col-sm-8 row"></main>
            <!-- Carrito -->
            <aside class="col-sm-4">
                <h2>Carrito</h2>
                <!-- Elementos del carrito -->
                <ul id="carrito" class="list-group"></ul>
                <hr>
                <!-- Precio total -->
                <p class="text-right">Total: <span id="total"></span>&dollar;</p>
                <button id="boton-vaciar" class="btn btn-danger">Vaciar</button>
                <button id="comprar" class="btn btn-danger">Comprar</button>
            </aside>
        </div>
    </div>
</body>
    <a class="LINK3" name="Dormitorio" id="Dormitorio">Dormitorio</a>
</body>
</html>