<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
  <a class="navbar-item" href="home.php">
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
          <a class="navbar-link">Usuarios</a>

          <div class="navbar-dropdown">
            <a class="navbar-item" href="agregar.php">Nuevo</a>
            <a class="navbar-item"  href="usuarios.php">Lista</a>
         
          </div>
      </div>>
      
      <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">Categorias</a>

          <div class="navbar-dropdown">
            <a class="navbar-item">Nuevo</a>
            <a class="navbar-item">Lista</a>
            <a class="navbar-item">Buscar</a>
          </div>
      </div>

      <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">Productos</a>

          <div class="navbar-dropdown">
            <a class="navbar-item" href="tienda_admin.php">Lista</a>
            <a class="navbar-item" href="agregar_producto.php">Agregar Producto</a>
          </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
        <a class="button is-primary is-rounded"  href="index.php">
           Mi cuenta
          </a>
          <a class="button is-light is-link is-rounded"  href="desconectarUsuario.php">
            Salir
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>