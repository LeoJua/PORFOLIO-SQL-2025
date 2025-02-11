<!DOCTYPE html>
<html lang="en">


<head>

  <?php
    require("iconito.php");
    ?>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> REGISTRO </title>


    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <link href="../css/business-casual.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">


    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


<script  src="../js/jquery-3.2.1.js"></script>

    <script  src="../js/jquery.validate.js"></script>
    <script>


      $(document).ready(function(){

        var requerido="es obligatorio";



      jQuery.validator.addMethod("letras", function(value, element) {
  return this.optional( element ) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test( value );
  }, 'Solo se permiten letras.');


      $("#registroo").validate({
        rules:{
          nombre:{
            required:true,
            letras:true

          },
          Apellido:{
          	required:true,
          	letras:true

          }

        }
          ,
        messages:{
           nombre:{
            required:requerido

          },
          messages:{
          	Apellido:{
          	required:requerido
          	}
          }

        }


      });
  });

    </script>
    <style type="text/css">
      .error{
        display: block;
      }
    </style>






</head>



<body >




    <?php
    include("cabecera.php");
    ?>

    <center>
    <div class="box" style="width:390px;height:980px">


    <br>

    <center>

    <img src="../img/1448784664user-icon.png" width="150">

    </center>

    <br>
    <br>






    <form method="POST" action="../controlador/adsi.php" id="registroo" name="registroo">

      <strong>NOMBRES </strong><br>

      <input type="text" id="nombre" name="nombre" placeholder="Solo letras"><br/>
      <br>



      <strong>APELLIDOS</strong><br>

      <input type="text" id="apellido" name="apellido" placeholder="Solo letras"><br/>
      <br>



      <strong>DOCUMENTO </strong><br>

      <input type="number" id="documento" name="documento"  placeholder="Solo numeros" required maxlength="11"/><br/>

      <h6>solo puedes usar numeros

      </h6>




      <strong>CONTRASEÑA</strong>

      <br>

      <input type="password" id="password" name="password"  required  placeholder="Ingresa contraseña"/><br/>

      <h6>Puedes usar letras, números y puntos.

      </h6>



      <strong>FECHA DE NACIMIENTO</strong><br>



      <input type="date" name="fecha" required/>

      </label>
      </fieldset>





      <br>

      <div class="form-element" id="gender-form-element"  required>
      <br>

      <strong >GENERO</strong><br>

      <select id="genero" name="genero" required value="escoge" placeholder="Escoge">
      <option></option>
      <option  value="Mujer" >Mujer</option>
      <option  value="Hombre" >Hombre</option>
      </select>

      </label>

      <br>

      </div>

      <br>

      <strong>TELEFONO</strong><br>

      </label>

      <input type="number" id="telefono" placeholder="Solo numeros" name="telefono" required/>

      <br>

      <br>

      <br>
      <input type="hidden" name="accion" value="insert">
      <input type="submit" title="enviar" name="submit" button class="btn btn-lg btn-primary btn-block btn-sm"  style="width:210px" required>

      <br>

      </form>



      <center>

      </form>

      </center>

      </div>

      </div>

      </div>

      <footer>

        <div class="container">

            <div class="row">

                <div class="col-lg-12 text-center">

                    <p>TECHNOLOGY DUNK</p>

                </div>

            </div>

        </div>

      </footer>


    <script src="../js/jquery.js"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
