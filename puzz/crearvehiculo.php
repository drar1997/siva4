<div id="regcar" style="padding-left: 8%; padding-right: 8%; display: none;">
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<h2>Regístrate un Vehículo Nuevo</h2>
	<div class="form-group">
		<input type="number" name="numunidad" placeholder="Número de Unidad" class="form-control">
	</div>
	<div class="form-group">
		<input type="text" name="placa" placeholder="Placa" class="form-control">
	</div>
	<div class="form-group">
		<input type="text" name="marca" placeholder="Marca" class="form-control">
	</div>
	<div class="form-group">
		<input type="text" name="linea" placeholder="Línea" class="form-control">
	</div>
	<div class="form-group">
		<input type="text" name="propietario" placeholder="Nombre del propietario" class="form-control">
	</div>
	<div class="form-group">
	  <label for="seltdp">Tipo de documento de identidad:</label>
	  <select class="form-control" id="seltdp" name="tdocpropietario">
	    <option>C.C.</option>
	    <option>C.E.</option>
	    <option>Pasaporte</option>
	    <option>P.E.P.</option>
	  </select>
	</div>
	<div class="form-group">
	<input type="number" name="numdocpropietario" min="1000" placeholder="Número de documento" class="form-control">
	</div>
	<div class="form-group">
	<input type="number" name="cantasientos" placeholder="Cantidad de asientos" class="form-control" min="1" max="99">
	</div>
	Servicio de WiFi: 
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="servwifi" value="1">Sí
	  </label>
	</div>
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="servwifi" value="2">No
	  </label>
	</div>
	<br>
	Servicio de Televisión: 
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="servtv" value="1">Sí
	  </label>
	</div>
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="servtv" value="2">No
	  </label>
	</div>
	<br>
	Servicio de Baño: 
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="servbath" value="1">Sí
	  </label>
	</div>
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="servbath" value="2">No
	  </label>
	</div>
	<br>
	<div class="form-group">
		<input type="text" name="otrosserv" placeholder="Otros Servicios..." class="form-control">
	</div>
	<div class="form-group">
	<button class="btn canyshowfunc" type="button">Cancelar</button>
	<input type="text" name="posttype" value="regcar" style="display: none;">
	<button type="submit" class="btn btn-success">Registrar</button> 
	</div>
</form></div>
<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["posttype"] == "regcar"){

			if (empty($_POST["numunidad"]) or empty($_POST["placa"]) or empty($_POST["marca"]) or empty($_POST["linea"]) or empty($_POST["propietario"]) or empty($_POST["tdocpropietario"]) or empty($_POST["numdocpropietario"]) or empty($_POST["cantasientos"]) or empty($_POST["servwifi"]) or empty($_POST["servtv"]) or empty($_POST["servbath"])) {
				  echo "<script>alert('Por favor rellena todos los datos.');</script>";
			  }else{

				$numunidad = $_POST["numunidad"];
				$placa = $_POST["placa"];
				$marca = $_POST["marca"];
				$linea = $_POST["linea"];
				$propietario = $_POST["propietario"];
				$tdocpropietario = $_POST["tdocpropietario"];
				$numdocpropietario = $_POST["numdocpropietario"];
				$cantasientos = $_POST["cantasientos"];
				$servwifi = $_POST["servwifi"];
				$servtv = $_POST["servtv"];
				$servbath = $_POST["servbath"];
				$otrosserv = $_POST["otrosserv"];
				
				function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					  return $data;
					}

				$numunidad= test_input($numunidad);
				$placa= test_input($placa);
				$marca= test_input($marca);
				$linea= test_input($linea);
				$propietario = test_input($propietario);
				$tdocpropietario = test_input($tdocpropietario);
				$numdocpropietario = test_input($numdocpropietario);
				$cantasientos = test_input($cantasientos);
				$servwifi = test_input($servwifi);
				$servtv = test_input($servtv);
				$servbath = test_input($servbath);
				$otrosserv = test_input($otrosserv);

				//MySQl
				require_once('puzz/dbconnect.php');
				//checkar if the placa exists
				$sql = "SELECT * FROM  cars WHERE placa = '$placa'";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
					  				
									$_SESSION['failure'] = "Ese Placa ya está registrada con nosotros";
									$_SESSION['failureshow'] = "#regcar";
									require_once('puzz/logdataerr.php');
							    
							} else {
								   $sqll = "INSERT INTO cars (numunidad, placa, marca, linea, propietario, tdocpropietario, numdocpropietario, cantasientos, servwifi, servtv, servbath, otrosserv )
									VALUES ('$numunidad', '$placa', '$marca', '$linea', '$propietario', '$tdocpropietario', '$numdocpropietario', '$cantasientos', '$servwifi', '$servtv', '$servbath', '$otrosserv')";

									if ($conn->query($sqll) === TRUE) {
									    echo "<script>alert('Felicitaciones! Registro Exitoso!');</script>";
									} else {
									    echo "Error: " . $sqll . "<br>" . $conn->error;
									}

							}

				
				$conn->close();}}
 ?>