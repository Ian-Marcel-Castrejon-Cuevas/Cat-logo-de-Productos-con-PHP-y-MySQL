<?php
  include('acceso.php');
  $producto = "SELECT * FROM producto";

    if (isset($_POST['comprar'])) {
    if (strlen($_POST['id']) >= 1) {
	  $prodid = $_POST['id'];
      $fechaActual = "SELECT NOW()";
      $precio = $row["precio"];

	    $consulta = "INSERT INTO orden (prodid, orderdate, total) VALUES ('$prodid','$fechaActual','$precio')";
	    $resultado= $conexion->query($consulta);
	    if ($resultado) {
	    	?> 
        <?php
           header('Location: comprar.php');
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
        <h4 style="text-align: center;">Producto a comprar</h4>

        <input class="controls" type="text" name="id" id="id" placeholder="Ingrese el id" isset>

        <input class="botons" type="submit" value="Buscar" name="buscar">

        <?php
        if (isset($_POST['buscar'])) {
            $id = $_POST['id'];
            $producto = "SELECT * FROM producto where '$id'";
            $resultado = mysqli_query($conexion, $producto);
            $row = mysqli_fetch_assoc($resultado);
        ?>

        <div style="text-align: center;"><img height="50px" src="data:image/jpg;base64, <?php echo base64_encode($row["img"]) ?>"></div>
        <div style="text-align: center;"><?php echo $row["nombre"]; ?></div>
        <div style="text-align: center;"><?php echo "$" . $row["precio"]; ?></div>
        <input class="botons" type="submit" value="Comprar" name="comprar">

        <?php
        }
        ?>
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