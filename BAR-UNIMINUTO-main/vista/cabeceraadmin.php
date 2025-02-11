<nav class="navbar navbar-default" role="navigation">

    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
            </button>

            <a class="navbar-brand" href="index.php">MEATS AND WINES</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">

                <li>
                  <a href="tablaproductos.php">Productos
                  </a>
                </li>


                <li>
                  <a href="tablausuarios.php">Usuarios
                  </a>
                </li>


                <li>
                  <a href="tablaproveedores.php">proveedores
                  </a>
                </li>

                <li>
                  <a href="pedidos/pedidos.php">Pedidos
                  </a>
                </li>

                <li>
                  <a href="Reportes/reportes.php">
                  <span class="glyphicon glyphicon-signal"></a>
                </li>

                <li class="nav navbar-navl">
                  <a href=""><?php echo $_SESSION['nombre'];?>
                <span class="glyphicon glyphicon-user"></a>
                </li>

                <li class="nav navbar-navl">
                  <a href="../controlador/desconectar.php">salir
                <span class="glyphicon glyphicon-remove"></a>
                </li>

            </ul>

        </div>

    </div>

</nav>
