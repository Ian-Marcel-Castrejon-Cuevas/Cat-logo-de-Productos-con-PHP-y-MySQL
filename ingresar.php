<?php
  include('acceso.php');

  if (isset($_POST['registrar'])) {
    if (strlen($_POST['nombre']) >= 1) {
	    $name = $_POST['nombre'];
      $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
      $stock = $_POST['stock'];
      $precio = $_POST['precio'];
	    $consulta = "INSERT INTO producto (img, nombre, stock, precio) VALUES ('$imagen','$name','$stock','$precio')";
	    $resultado= $conexion->query($consulta);
	    if ($resultado) {
	    	?> 
        <?php
           header('Location: index.php');
           ?> 
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <title>..INDEX...</title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">ITZ</a>
      <button class="navbar-toggler" type="button"
      data-toggle="collapse" data-target="#navi"
      aria-controls="navi" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navi">
      <ul class="navbar-nav mr-auto">
      <li>
      <a class="nav-link" href="comprar.php">Comprar
      <span class="sr-only">(current)</span></a>
      </li>
      <li>
      <a class="nav-link" href="ingresar.php">Ingresar
      <span class="sr-only">(current)</span></a>
      </li>
      <li>
      <a class="nav-link" href="nosotros.html">Nosotros
      <span class="sr-only">(current)</span></a>
      </li>
      </ul>
      </div>
      </nav>

      <p id="mostrar"></p>

        <form method="POST" enctype="multipart/form-data">
        <section class="form-register">
        <h4 style="text-align: center;">Ingresar un nuevo producto</h4>
        <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre" required="">
        <input type="file" name="imagen" required=""><br><br>
        <input class="controls" type="number" name="stock" id="stock" placeholder="Stock" required="">
        <input class="controls" type="number" name="precio" id="precio" placeholder="Precio" required="">
        <input class="botons" type="submit" value="Registrar" name="registrar">
        </section>
        </form>
        <br><br><br>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>