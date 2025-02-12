<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        />
        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
            rel="stylesheet"
        />
        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css" />
        <title>Dictionary</title>
        </head>
    <body>
        <form action="" method="get">
            <div class="container">
            <div><H1> Ingresa código de tu infracción aquí abajo ⬇</H1> <h6>(si no lo conoces, por favor pulsa en buscar para traer todos los resultados):</h6></div>
            <br>
              <div class="search-box">
          
                <input  type="text"  name="busqueda" placeholder="Escribe una palabra clave aqui ..." id="inp-word"/>
                <button  name="enviar" id="search-btn" value="Buscar">Buscar</button>
            </div>
            <br>
                    <?php
                    if(isset($_GET['enviar'])){
                    $busqueda = $_GET ['busqueda'];
                    $Consulta = $conn->query("SELECT * FROM infraciones_transito WHERE codigo_de_infraccion  LIKE '%$busqueda%'");

                        while ($row = $Consulta->fetch ()) {
                        echo "<b> Codigo de Infracción: </b>"; 
                        echo $row ['codigo_de_infraccion']. '<br>';
                        echo "<b> Descripción de Infracción: </b>"; 
                        echo $row ['Descripcion_de_infraccion']. '<br>';
                        echo "<b> Cantidad a pagar (SMLDV): </b>"; 
                        echo $row ['Cantidad_SMLDV']. '<br>';
                        echo "<b> Valor total de Infracción: </b>"; 
                        echo $row ['Valor_$(100%)']. '<br>';
                        echo "<b> Vigencia: </b>"; 
                        echo $row ['Vigencia']. '<br>';
                    
                    }
                }
                 ?>   
            </div>
         </form>
    </body>
</html>