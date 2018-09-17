<?php 
	session_start();
 ?>
 <!DOCTYPE html>
<html lang="es">
<head>
	<!-- Titulo de la página -->
<title>Cooptmotilon</title>
<!-- UTF8-->
<meta charset="utf-8">
<!--Viewport-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!--Favicon-->
<link rel="apple-touch-icon" sizes="57x57" href="fav/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="fav/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="fav/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="fav/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
<link rel="manifest" href="fav/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="fav/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!--Google Fonts-->
<link href="https://fonts.googleapis.com/css?family=Marcellus+SC|Raleway" rel="stylesheet">
<!--Iconos Font Awesome Icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Iconos de Google Material Desing-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Css-->
<link rel="stylesheet" type="text/css" href="../puzz/css/estilo123.css">
<!--Javascript personalizado-->
<script src="../puzz/js.js"></script>
</head>
<body>
	<?php  
		if (!empty($_SESSION['collectiondata'])) {	
			echo "<pre>";
			print_r($_POST);	
			print_r($_SESSION['collectiondata']);
			echo "</pre>";
			echo "<br>";
			echo "<form action='venderboletos4.php' method='POST'>
												<input  class='nodisplay' type='text' name='posttype' value='venderboletos4'>
												 
										";
			echo "<table class=\"table table-striped tablewhite\">";
			echo "<tr>
					<th>N° de asiento</th>
					<th>Número de documento de la persona que viajará en este asiento</th>
				</tr>";
			
			foreach($_POST as $key=>$value){
					if ($key == "posttype") {
						  continue;
					} else {
						echo "<tr>
					<td>$key</td>
					<td>
						<input type='number' name='p$key' placeholder='Numero de documento'>
					</td>
					</tr>";
					}
			}
					
			echo "</table>";		 
			$countasientos = count($_POST)-1;
			$costoasiento = $_SESSION['collectiondata'][7];
			$totalapagar = $countasientos*$costoasiento;
			echo "Total a pagar: $totalapagar";
			
			echo "<button type='submit' class='btn btn-success'>Comprar</button></form>";
		}else{
			echo "No Hello";
		}
	?>
</body>
</html>