<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
  <a class="navbar-item" href="index.php?vista=home">
      <img src="./imagenes/logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
     

      <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">Productos</a>

          <div class="navbar-dropdown">
            <a class="navbar-item" href="tienda.php">Lista</a>
          </div>
      </div>
    </div>

    <div class="navbar-end">
    <div class="navbar-item">
                    <div class="buttons">
                        <a href="ver_carrito.php" class="button is-success">
                            <strong>Ver carrito <?php
                                                include_once "funciones.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                        </a>
                    </div>
                </div>
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary is-rounded">
           Mi cuenta
          </a>
          <a class="button is-light is-link is-rounded">
            Salir
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>