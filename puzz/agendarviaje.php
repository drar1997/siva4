<div id="agviaje" style="padding-left: 8%; padding-right: 8%; display: none;">
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<h2>Agendar un Viaje</h2>
	<div class="form-group">
		<input type="text" name="lsalida" placeholder="Lugar de salida" class="form-control">
	</div>
	<div class="form-group">
		<input type="text" name="lllegada" placeholder="Lugar de llegada" class="form-control">
	</div>
	<div class="form-group">
		<input type="datetime-local" name="fhsalida" placeholder="Fecha y Hora de Salida" class="form-control">
	</div>
	<div class="form-group">
		<input type="datetime-local" name="fhllegada" placeholder="Fecha y Hora de Llegada" class="form-control">
	</div>
	<div class="form-group">
		<input type="number" name="numunidad" placeholder="Número de Unidad" class="form-control">
	</div>
	<div class="form-group">
		<input type="text" name="idconductor" placeholder="Id del Conductor" class="form-control">
	</div>
	<div class="form-group">
	<button class="btn canyshowfunc" type="button">Cancelar</button>
	<input type="text" name="posttype" value="agviaj" style="display: none;">
	<button type="submit" class="btn btn-success">Registrar</button> 
	</div>
</form></div>
<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["posttype"] == "agviaj"){

			if (empty($_POST["lsalida"]) or empty($_POST["lllegada"]) or empty($_POST["fhsalida"]) or empty($_POST["fhllegada"]) or empty($_POST["numunidad"]) or empty($_POST["idconductor"])) {
				  echo "<script>alert('Por favor rellena todos los datos.');</script>";
			  }else{

				$lsalida = $_POST["lsalida"];
				$lllegada = $_POST["lllegada"];
				$fhsalida = $_POST["fhsalida"];
				$fhllegada = $_POST["fhllegada"];
				$numunidad = $_POST["numunidad"];
				$idconductor = $_POST["idconductor"];
				
				function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					  return $data;
					}

				$lsalida= test_input($lsalida);
				$lllegada= test_input($lllegada);
				$fhsalida= test_input($fhsalida);
				$fhllegada= test_input($fhllegada);
				$numunidad = test_input($numunidad);
				$idconductor = test_input($idconductor);

				//MySQl
				require_once('puzz/dbconnect.php');
				
								   $sqll = "INSERT INTO rutas (lsalida, lllegada, fhsalida, fhllegada, numunidad, idconductor)
									VALUES ('$lsalida', '$lllegada', '$fhsalida', '$fhllegada', '$numunidad', '$idconductor')";

									if ($conn->query($sqll) === TRUE) {
									    echo "<script>alert('Felicitaciones! Registro Exitoso!');</script>";
									} else {
									    echo "Error: " . $sqll . "<br>" . $conn->error;
									}

				
				$conn->close();}}
 ?>