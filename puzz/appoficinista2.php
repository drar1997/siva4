<!--Second Header 
	NOTA: clase relacionada shdr-->
<style type="text/css">
	#blankspc{
		display: none;
	}
</style>
<div class="row shdr">
	<div class="col-6 quitarpadding">
		<div class="form-group">
			<select class="form-control" id="selectfunc">
				<option value="">--Selecionar Categoría--</option>
				<option value="ao-selectfilter-viajes">Viajes</option>
				<option value="ao-selectfilter-boletos">Boletos</option>
				<option value="ao-selectfilter-vehiculos">Vehículos</option>
			</select>
		</div>
	</div>
	<div class="col-6 quitarpadding" style="text-align: left;">
			<div class="form-group" id="ao-selectfilter">
				<!--VARIOS SELECT-->

					<!--LISTADO DE VIAJES-->
					<div id="ao-selectfilter-viajes">
						<select class="form-control" id="ao-selectfilter-viajes2">
							<option value="">--Seleccionar Filtros--</option>
							<option value="ao-viajes-listado-vertodos">Todos</option>
							<option value="ao-viajes-listado-verhoy">Hoy</option>
							<option value="ao-viajes-listado-verayer">Ayer</option>
							<option value="ao-viajes-administrarviajes-anadir">(+)Añadir viaje</option>
							<option value="ao-viajes-administrarviajes-remover">(-) Remover</option>
							<option value="ao-viajes-administrarviajes-editar">(*) Editar</option>
						</select>
					</div>
					<!--LISTADO DE BOLETOS-->
					<div id="ao-selectfilter-boletos">
						<select class="form-control" id="ao-selectfilter-boletos2">
							<option value="">--Seleccionar Filtros--</option>
							<option value="ao-boletos-administrarboletos-anadir">Añadir o Vender Boletos</option>
							<option value="ao-boletos-administrarboletos-remover">Remover</option>
							<option value="ao-boletos-administrarboletos-editar">Editar</option>
						</select>
					</div>
					<!--LISTADO DE VEHICULOS-->
					<div id="ao-selectfilter-vehiculos">
						<select class="form-control" id="ao-selectfilter-vehiculos2">
							<option value="">--Seleccionar Filtros--</option>
							<option value="ao-vehiculos-administrarvehiculos-anadir">Añadir Vehículo</option>
							<option value="ao-vehiculos-administrarvehiculos-remover">Remover</option>
							<option value="ao-vehiculos-administrarvehiculos-editar">Editar</option>
						</select>
					</div>
			</div>
	</div>
</div>
<!--Fin del Second Header-->










<!--DIV CONTAINER APP RESULTS-->
<!--App OFICINISTA id='ao'-->
<div id="ao">

	<!--VIAJES-->
	<div id="ao-viajes">

		<!--LISTADO-->
		<div id="ao-viajes-listado">

			<!--VER TODOS-->
			<div id="ao-viajes-listado-vertodos">

				<h3>Listado de Todos los Viajes</h3>
					<table class="table table-striped tablewhite">
						
						<?php 
							require('puzz/dbconnect.php');
							$sql = "SELECT * FROM  rutas;";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								echo "<tr>
											<th>#</th><th>Lugar de Salida</th><th>Lugar de Llegada</th><th>Fecha y Hora de Salida</th><th>Fecha y Hora de llegada</th><th>Número de Unidad</th><th>Id del conductor</th>
										</tr>";

								while($row = $result->fetch_assoc()) {
						        
							    $id = $row["id"];
							    $lsalida = $row["lsalida"];
							    $lllegada = $row["lllegada"];
							    $fhsalida = $row["fhsalida"];
							    $fhllegada = $row["fhllegada"];
							    $numunidad = $row["numunidad"];
							    $idconductor = $row["idconductor"];

							    echo "<tr>
											<td>$id</td><td>$lsalida</td><td>$lllegada</td><td>$fhsalida</td><td>$fhllegada</td><td>$numunidad</td><td>$idconductor</td>
										</tr>";
						   		 }
							}else {
										$_SESSION['failure'] = "No hemos podido conseguir viajes por ahora, intenta más tarde.";
										$_SESSION['failureshow'] = "#verphptlv";
										require('puzz/logdataerr.php');
						    
										}
							$conn->close();
						 ?>
					</table>
					<button class="btn canyshowfunc" type="button">Cancelar</button>

			</div>

			<!--VER HOY-->
			<div id="ao-viajes-listado-verhoy">

				<h3>Listado de Todos los Viajes de Hoy</h3>
					<table class="table table-striped tablewhite">
						
						<?php 
							require('puzz/dbconnect.php');
							$sql = "SELECT * FROM  rutas WHERE date(fhsalida) = CURDATE();";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {

								echo "<tr>
										<th>#</th><th>Lugar de Salida</th><th>Lugar de Llegada</th><th>Fecha y Hora de Salida</th><th>Fecha y Hora de llegada</th><th>Número de Unidad</th><th>Id del conductor</th>
									</tr>";

								while($row = $result->fetch_assoc()) {
						        
							    $id = $row["id"];
							    $lsalida = $row["lsalida"];
							    $lllegada = $row["lllegada"];
							    $fhsalida = $row["fhsalida"];
							    $fhllegada = $row["fhllegada"];
							    $numunidad = $row["numunidad"];
							    $idconductor = $row["idconductor"];

							    echo "<tr>
											<td>$id</td><td>$lsalida</td><td>$lllegada</td><td>$fhsalida</td><td>$fhllegada</td><td>$numunidad</td><td>$idconductor</td>
										</tr>";
						   		 }
							}else {
										$_SESSION['failure'] = "No hemos podido conseguir viajes programados para hoy, intenta más tarde.";
										$_SESSION['failureshow'] = "#verphptlv";
										require('puzz/logdataerr.php');
						    
										}
							$conn->close();
						 ?>
					</table>
					<button class="btn canyshowfunc" type="button">Cancelar</button>


			</div>

			<!--VER AYER-->
			<div id="ao-viajes-listado-verayer">
			
				<h3>Listado de Todos los Viajes de ayer</h3>
					<table class="table table-striped tablewhite">
						
						<?php 
							require('puzz/dbconnect.php');
							$sql = "SELECT * FROM rutas WHERE date(fhsalida) = date(NOW() - INTERVAL 1 DAY);";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								echo "<tr>
											<th>#</th><th>Lugar de Salida</th><th>Lugar de Llegada</th><th>Fecha y Hora de Salida</th><th>Fecha y Hora de llegada</th><th>Número de Unidad</th><th>Id del conductor</th>
										</tr>";

								while($row = $result->fetch_assoc()) {
						        
							    $id = $row["id"];
							    $lsalida = $row["lsalida"];
							    $lllegada = $row["lllegada"];
							    $fhsalida = $row["fhsalida"];
							    $fhllegada = $row["fhllegada"];
							    $numunidad = $row["numunidad"];
							    $idconductor = $row["idconductor"];

							    echo "<tr>
											<td>$id</td><td>$lsalida</td><td>$lllegada</td><td>$fhsalida</td><td>$fhllegada</td><td>$numunidad</td><td>$idconductor</td>
										</tr>";
						   		 }
							}else {
										$_SESSION['failure'] = "No hemos podido conseguir viajes de ayer, intenta más tarde.";
										$_SESSION['failureshow'] = "#verphptlv";
										require('puzz/logdataerr.php');
						    
										}
							$conn->close();
						 ?>
					</table>
					<button class="btn canyshowfunc" type="button">Cancelar</button>


			</div>

		</div>

		<!--ADMINISTRAR VIAJES-->
		<div id="ao-viajes-administrarviajes">

			<!--AÑADIR VIAJE-->
			<div id="ao-viajes-administrarviajes-anadir">
			
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
						<input type="number" name="costotckt" placeholder="Costo del Boleto" class="form-control" min="1" max="10000000">
					</div>
					<div class="form-group">
					<button class="btn canyshowfunc" type="button">Cancelar</button>
					<input  class="nodisplay" type="text" name="posttype" value="agviaj">
					<button type="submit" class="btn btn-success">Registrar</button> 
					</div>
				</form>
				<?php 
					if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["posttype"] == "agviaj"){

							if (empty($_POST["lsalida"]) or empty($_POST["lllegada"]) or empty($_POST["fhsalida"]) or empty($_POST["fhllegada"]) or empty($_POST["numunidad"]) or empty($_POST["idconductor"]) or empty($_POST["costotckt"])) {
								  echo "<script>alert('Por favor rellena todos los datos.');</script>";
							  }else{

								$lsalida = $_POST["lsalida"];
								$lllegada = $_POST["lllegada"];
								$fhsalida = $_POST["fhsalida"];
								$fhllegada = $_POST["fhllegada"];
								$numunidad = $_POST["numunidad"];
								$idconductor = $_POST["idconductor"];
								$costotckt = $_POST["costotckt"];
								
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
								$costotckt = test_input($costotckt);

								//MySQl
								require('puzz/dbconnect.php');
								
												   $sqll = "INSERT INTO rutas (lsalida, lllegada, fhsalida, fhllegada, numunidad, idconductor, costotckt)
													VALUES ('$lsalida', '$lllegada', '$fhsalida', '$fhllegada', '$numunidad', '$idconductor', '$costotckt')";

													if ($conn->query($sqll) === TRUE) {
													    echo "<script>alert('Felicitaciones! Registro Exitoso!');</script>";
													} else {
													    echo "Error: " . $sqll . "<br>" . $conn->error;
													}

								
								require('puzz/dbclose.php');			
							}}
				 ?>

			</div>

			<!--REMOVER VIAJE-->
			<div id="ao-viajes-administrarviajes-remover">
			
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<h2>Eliminar un Viaje</h2>
					<div class="form-group">
						<input type="number" name="id" placeholder="id del viaje" class="form-control">
					</div>
					<div class="form-group">
					<button class="btn canyshowfunc" type="button">Cancelar</button>
					<input  class="nodisplay" type="text" name="posttype" value="remviaj">
					<button type="submit" class="btn btn-success">Registrar</button> 
					</div>
				</form>
				<?php 
					if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["posttype"] == "remviaj"){

							if (empty($_POST["id"])) {
								  echo "<script>alert('Por favor rellena todos los datos.');</script>";
							  }else{

								$id = $_POST["id"];
								
								function test_input($data) {
									  $data = trim($data);
									  $data = stripslashes($data);
									  $data = htmlspecialchars($data);
									  return $data;
									}

								$id= test_input($id);

								//MySQl
								require('puzz/dbconnect.php');
								
												   $sqll = "DELETE FROM rutas WHERE id = '$id';";

													if ($conn->query($sqll) === TRUE) {
													    echo "<script>alert('Felicitaciones! Registro Eliminado!');</script>";
													} else {
													    echo "Error: " . $sqll . "<br>" . $conn->error;
													}

								
								require('puzz/dbclose.php');			
							}}
				 ?>

			</div>

			<!--EDITAR VIAJE-->
			<div id="ao-viajes-administrarviajes-editar" class="editar">
				<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<h2>Editar un Viaje</h2>
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
						<input type="number" name="costotckt" placeholder="Costo del Boleto" class="form-control" min="1" max="10000000">
					</div>
					<div class="form-group">
					<button class="btn canyshowfunc" type="button">Cancelar</button>
					<input  class="nodisplay" type="text" name="posttype" value="editviaj">
					<button type="submit" class="btn btn-success">Registrar</button> 
					</div>
				</form>
				<?php 
					if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["posttype"] == "editviaj"){

							if (empty($_POST["lsalida"]) or empty($_POST["lllegada"]) or empty($_POST["fhsalida"]) or empty($_POST["fhllegada"]) or empty($_POST["numunidad"]) or empty($_POST["idconductor"]) or empty($_POST["costotckt"])) {
								  echo "<script>alert('Por favor rellena todos los datos.');</script>";
							  }else{

								$lsalida = $_POST["lsalida"];
								$lllegada = $_POST["lllegada"];
								$fhsalida = $_POST["fhsalida"];
								$fhllegada = $_POST["fhllegada"];
								$numunidad = $_POST["numunidad"];
								$idconductor = $_POST["idconductor"];
								$costotckt = $_POST["costotckt"];
								
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
								$costotckt = test_input($costotckt);

								//MySQl
								require('puzz/dbconnect.php');
								
												   $sqll = "INSERT INTO rutas (lsalida, lllegada, fhsalida, fhllegada, numunidad, idconductor, costotckt)
													VALUES ('$lsalida', '$lllegada', '$fhsalida', '$fhllegada', '$numunidad', '$idconductor', '$costotckt')";

													if ($conn->query($sqll) === TRUE) {
													    echo "<script>alert('Felicitaciones! Registro Exitoso!');</script>";
													} else {
													    echo "Error: " . $sqll . "<br>" . $conn->error;
													}

								
								require('puzz/dbclose.php');			
							}}
				 ?>
			</div>
		</div>
	</div>


	<!--BOLETOS-->
	<div id="ao-boletos">

		<!--ADMINISTRAR BOLETOS-->
		<div id="ao-boletos-administrarboletos">

			<!--AÑADIR O VENDER BOLETOS-->
			<div id="ao-boletos-administrarboletos-anadir">Añadir o Vender Boletos</div>

			<!--REMOVER BOLETOS-->
			<div id="ao-boletos-administrarboletos-remover">Remover Boletos</div>

			<!--EDITAR BOLETOS-->
			<div id="ao-boletos-administrarboletos-editar" class="editar">Editar Boletos</div>
		</div>
	</div>


	<!--VEHICULOS-->
	<div id="ao-vehiculos">
		
		<!--ADMINISTRAR VEHICULOS-->
		<div id="ao-vehiculos-administrarvehiculos">

			<!--AÑADIR VEHICULO-->
			<div id="ao-vehiculos-administrarvehiculos-anadir">Añadir Vehículo</div>

			<!--REMOVER VEHICULO-->
			<div id="ao-vehiculos-administrarvehiculos-remover">Remover Vehículo</div>

			<!--EDITAR VEHICULO-->
			<div id="ao-vehiculos-administrarvehiculos-editar" class="editar">Editar Vehículo</div>
		</div>
	</div>
</div>