<?php
    session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

    <title>Pymesup</title>
  </head>
  <body>
      <?php include_once("../navbar.php");
      echo navBar(1);?>
      
  	<?php include_once("header.php");?>

	  <nav>
			<ul id="menu">
				<li><a href="index.php">INICIO</a></li>
				<li><a href="about.php">SOBRE NOSOTROS</a></li>
			</ul>
		</nav><br>

		<div class="container">
		
    		<main>
    		    
    			<h2>Servicio</h2>
    			<p>�Interesado en gestionar de manera eficiente tu empresa?<br>
    			Actualiza tus inventarios, contabiliza tus ventas y gestiona tus decisiones con Pymesup &reg nuestro servicio de administraci�n para tu negocio.<br></p>
    			
    			<?php include_once("validador.php");?>
    			
    			<img src="res/img/ejecutivo.jpg" class="img-fluid" alt="Responsive image" style="width:100%">
    
    
    		</main>
		
		</div>

	<?php include_once("footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>