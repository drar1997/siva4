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
	<table class="table table-striped tablewhite">
	<?php 
		if (!empty($_POST['idselected']) && $_POST['posttype'] == "venderboletos2") {
			
			$idruta= $_POST['idselected'];


			require('dbconnect.php');
			$sql = "SELECT * FROM rutas WHERE id = '$idruta' LIMIT 1;";

		
			/**/
			$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							

								while($row = $result->fetch_assoc()) {
						        
							    $id = $row["id"];
							    $lsalida = $row["lsalida"];
							    $lllegada = $row["lllegada"];
							    $fhsalida = $row["fhsalida"];
							    $fhllegada = $row["fhllegada"];
							    $numunidad = $row["numunidad"];
							    $idconductor = $row["idconductor"];
							    $costotckt = $row["costotckt"];
							    $date = date("h:i a", strtotime($fhsalida));
							    /* segunda consulta */
							    $sql2 = "SELECT * FROM cars WHERE numunidad = '$numunidad' LIMIT 1;";

							    $result2 = $conn->query($sql2);

							    if ($result2->num_rows > 0) {
							    	while ($row2 = $result2->fetch_assoc()) {
							    		$carplaca = $row2["placa"];
							    		$carmarca = $row2["marca"];
							    		$carlinea = $row2["linea"];
							    		$carcantasientos = $row2["cantasientos"];
							    		$carservwifi = $row2["servwifi"];
							    		$carservtv = $row2["servtv"];
							    		$carservbath = $row2["servbath"];
							    		$carotrosserv = $row2["otrosserv"];

							    		echo "Datos: $id, $lsalida, $lllegada, $fhsalida, $fhllegada, $idconductor, $costotckt <br> 
											$numunidad, $carplaca, $carmarca, $carlinea, $carcantasientos,
											$carservwifi, $carservtv, $carservbath.<br>
							    		";

							    		/* Tercera consulta*/
							    		 $sql3 = "SELECT * FROM rviajes WHERE id = '$id' LIMIT 1;";

							   			 $result3 = $conn->query($sql3);

							    if ($result3->num_rows > 0) {
							    	while ($row3 = $result3->fetch_assoc()) {
							    		$countasiento = 1;
							    		$countp = 1;
							    		$collectiondata = array("$id","$lsalida","$lllegada", "$fhsalida", "$fhllegada", "$numunidad", "$idconductor", "$costotckt",  "$carplaca", "$carmarca", "$carlinea", "$carcantasientos", "$carservwifi", "$carservtv", "$carservbath", "$carotrosserv");
							    		$_SESSION['collectiondata'] = $collectiondata;

							    			echo "<form action='venderboletos3.php' method='POST'>
												<input  class='nodisplay' type='text' name='posttype' value='venderboletos3'>
												<button type='submit' class='btn btn-success'>Seleccionar estos asientos</button> 
										";
							    			echo "<table class=\"table table-striped tablewhite\">";
							    			echo "<tr>
													<th>N° de asiento</th>
													<th>Estado</th>
												</tr>";
							    		while ($countasiento <= $carcantasientos) {
							    		
							    			echo "<tr>
													<td id='numruta$id'>$countasiento</td>
													";
							    			
							    				if ($row3["p$countasiento"] === NULL) {
							    					echo "<td>Disponible <input type='checkbox' name='$countasiento' value='selected'></td>
												</tr>";
							    				}else{
							    					echo "<td>Ocupado</td>
												</tr>";
							    				}
							    			$countasiento++;
							    		}

							    		echo "</table></form>";
							    	}
							    }else {
										$_SESSION['failure'] = "numunidad invalido.";
										$_SESSION['failureshow'] = "#verphptlv";
										require('logdataerr.php');
						    
										}


							    	}
							    }else {
										$_SESSION['failure'] = "numunidad invalido.";
										$_SESSION['failureshow'] = "#verphptlv";
										require('logdataerr.php');
						    
										}
							    }
							}else {
										$_SESSION['failure'] = "Id selected invalido.";
										$_SESSION['failureshow'] = "#verphptlv";
										require('logdataerr.php');
						    
										}
							$conn->close();

		}else{
			echo "No sirve pa una mierdish";
		}
	 ?>
	 </table>
</body>
</html>