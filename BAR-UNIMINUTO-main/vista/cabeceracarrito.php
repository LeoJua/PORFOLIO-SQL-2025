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
                        <a href="../iniciousu.php">Inicio</a>
                    </li>
                 
                    <li>
                        <a href="blogusuario.php">Menu</a>
                    </li>
                   
                    <li>
                        <a href="reservacionusu.php">Reserva</a>
                    </li>
                    
                    <li>
                        <a href="carritodecompras.php">Carrito</a>
                    </li>
                    
                    <li>
                        <a href=""></a>
                    </li>
                    
                    <li class="nav navbar-navl" >
                         <a href=""><?php echo $_SESSION['nombre'];?>  
                    <span class="glyphicon glyphicon-user"></a>
                    </li>
                    </span>
                    
                    <li class="nav navbar-navl">
                        <a href="desconectar.php">salir
                    <span class="glyphicon glyphicon-remove"></a>
                    </li> 
                    
            </ul>
                                            
        </div>