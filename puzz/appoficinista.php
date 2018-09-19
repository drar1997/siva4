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
				<option disabled selected>--Categoría--</option>
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
							<option disabled selected>--Filtros--</option>
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
							<option disabled selected>--Filtros--</option>
							<option value="ao-boletos-administrarboletos-anadir">Añadir o Vender Boletos</option>
							<option value="ao-boletos-administrarboletos-remover">Remover</option>
							<option value="ao-boletos-administrarboletos-editar">Editar</option>
						</select>
					</div>
					<!--LISTADO DE VEHICULOS-->
					<div id="ao-selectfilter-vehiculos">
						<select class="form-control" id="ao-selectfilter-vehiculos2">
							<option disabled selected>--Filtros--</option>
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
											<th>#</th><th>Lugar de Salida</th><th>Lugar de Llegada</th><th>Fecha y Hora de Salida</th><th>Fecha y Hora de llegada</th><th>Número de Unidad</th><th>Id del conductor</th><th>Costo Ticket</th>
										</tr>";

								while($row = $result->fetch_assoc()) {
						        
							    $id = $row["id"];
							    $lsalida = $row["lsalida"];
							    $lllegada = $row["lllegada"];
							    $fhsalida = $row["fhsalida"];
							    $fhllegada = $row["fhllegada"];
							    $numunidad = $row["numunidad"];
							    $idconductor = $row["idconductor"];
							    $costotckt = $row["costotckt"];

							    echo "<tr>
											<td id='numruta$id'>$id</td><td>$lsalida</td><td>$lllegada</td><td>$fhsalida</td><td>$fhllegada</td><td>$numunidad</td><td>$idconductor</td><td>$costotckt</td>
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
										<th>#</th><th>Lugar de Salida</th><th>Lugar de Llegada</th><th>Fecha y Hora de Salida</th><th>Fecha y Hora de llegada</th><th>Número de Unidad</th><th>Id del conductor</th></th><th>Costo Ticket</th>
									</tr>";

								while($row = $result->fetch_assoc()) {
						        
							    $id = $row["id"];
							    $lsalida = $row["lsalida"];
							    $lllegada = $row["lllegada"];
							    $fhsalida = $row["fhsalida"];
							    $fhllegada = $row["fhllegada"];
							    $numunidad = $row["numunidad"];
							    $idconductor = $row["idconductor"];
							    $costotckt = $row["costotckt"];

							    echo "<tr>
											<td>$id</td><td>$lsalida</td><td>$lllegada</td><td>$fhsalida</td><td>$fhllegada</td><td>$numunidad</td><td>$idconductor</td><td>$costotckt</td>
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
											<th>#</th><th>Lugar de Salida</th><th>Lugar de Llegada</th><th>Fecha y Hora de Salida</th><th>Fecha y Hora de llegada</th><th>Número de Unidad</th><th>Id del conductor</th></th><th>Costo Ticket</th>
										</tr>";

								while($row = $result->fetch_assoc()) {
						        
							    $id = $row["id"];
							    $lsalida = $row["lsalida"];
							    $lllegada = $row["lllegada"];
							    $fhsalida = $row["fhsalida"];
							    $fhllegada = $row["fhllegada"];
							    $numunidad = $row["numunidad"];
							    $idconductor = $row["idconductor"];
							    $costotckt = $row["costotckt"];

							    echo "<tr>
											<td>$id</td><td>$lsalida</td><td>$lllegada</td><td>$fhsalida</td><td>$fhllegada</td><td>$numunidad</td><td>$idconductor</td><td>$costotckt</td>
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
			
				<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
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
													    $last_id = $conn->insert_id;
														$sqll2 = "INSERT INTO rviajes (id)
														VALUES ('$last_id');";
													 	if ($conn->query($sqll2) === TRUE){
													 		echo "<script>alert('Felicitaciones! Registro Exitoso!');</script>";
													 	}else {
													   		echo "Error: " . $sqll2 . "<br>" . $conn->error;
															}
													} else {
													    echo "Error: " . $sqll . "<br>" . $conn->error;
													}

								
								require('puzz/dbclose.php');			
							}}
				 ?>

			</div>

			<!--REMOVER VIAJE-->
			<div id="ao-viajes-administrarviajes-remover">
			
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
					<h2>Eliminar un Viaje</h2>
					<div class="form-group">
						<input type="number" name="id" placeholder="id del viaje" class="form-control">
					</div>
					<div class="form-group">
					<button class="btn canyshowfunc" type="button">Cancelar</button>
					<input  class="nodisplay" type="text" name="posttype" value="remviaj">
					<button type="submit" class="btn btn-success">Eliminar</button> 
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
													$sqll2 = "DELETE FROM rviajes WHERE id = '$id';";

													if ($conn->query($sqll2) === TRUE) {
													    echo "<script>alert('Felicitaciones! Registro Eliminado!');</script>";
													} else {
													    echo "Error: " . $sqll2 . "<br>" . $conn->error;
													}

								
								require('puzz/dbclose.php');			
							}}
				 ?>

			</div>

			<!--EDITAR VIAJE-->
			<div id="ao-viajes-administrarviajes-editar" class="editar">
				<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
					<input type="number" name="id" placeholder="id">
					<input  class="nodisplay" type="text" name="posttype" value="editviaj">
					<button type="submit" class="btn btn-success" id="ao-viajes-editar-buscarid">Buscar ID</button> 
				</form>	
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
						<table class="table table-striped tablewhite">
					<?php 
						if (!empty($_POST['id']) && $_POST['posttype'] == "editviaj") {
							$_SESSION['buscaridedit'] = "seteada";
							$id = $_POST['id'];
							function test_input($data) {
														  $data = trim($data);
														  $data = stripslashes($data);
														  $data = htmlspecialchars($data);
														  return $data;
														}

							$id= test_input($id);
							require('puzz/dbconnect.php');
							$sql = "SELECT * FROM rutas WHERE id = '$id';";
							$result = $conn->query($sql);
												if ($result->num_rows > 0) {

													echo "<tr>
															<th>#</th><th>Lugar de Salida</th><th>Lugar de Llegada</th><th>Fecha y Hora de Salida</th><th>Fecha y Hora de llegada</th><th>Número de Unidad</th><th>Id del conductor</th><th>Costo Ticket</th>
														</tr>";

													while($row = $result->fetch_assoc()) {
											        
												    $idd = $row["id"];
												    $lsalida = $row["lsalida"];
												    $lllegada = $row["lllegada"];
												    $fhsalida = $row["fhsalida"];
												    $fhllegada = $row["fhllegada"];
												    $numunidad = $row["numunidad"];
												    $idconductor = $row["idconductor"];
												    $costotckt = $row["costotckt"];

										$s = $fhsalida;
									$dts = new DateTime($s);

									$dates = $dts->format('Y-m-d');
									$times = $dts->format('H:i');

									$fhsalida = $dates . 'T' . $times;
									
									$ll = $fhllegada;
									$dtll = new DateTime($ll);

									$datell = $dtll->format('Y-m-d');
									$timell = $dtll->format('H:i');

									$fhllegada = $datell . 'T' . $timell;
									
							echo "<tr>				
									<td>
										<input type='text' name='id' value='$idd' class='nodisplay'>$idd
									</td>
									<td>
										<input type='text' name='lsalida' value='$lsalida'>
									</td>
									<td>
										<input type='text' name='lllegada' value='$lllegada'>
									</td>
									<td>
										<input type='datetime-local' name='fhsalida' value='$fhsalida'>
									</td>
									<td>
										<input type='datetime-local' name='fhllegada' value='$fhllegada'>
									</td>
									<td>
										<input type='number' name='numunidad' value='$numunidad'>
									</td>
									<td>
										<input type='number' name='idconductor' value='$idconductor'>
									</td>
									<td>
										<input type='number' name='costotckt' value='$costotckt'>
									</td>
								</tr>";
								
								
											   		 }
												}else {
															$_SESSION['failure'] = "No hemos podido conseguir ese id";
															$_SESSION['failureshow'] = "#verphptlv";
															require('puzz/logdataerr.php');
											    
															}
												$conn->close();
			
						}else{
							echo "No Hello! ";
						}
					?>
					</table>
					<input  class="nodisplay" type="text" name="posttype" value="editviaj2">
					<button class="btn canyshowfunc" type="submit">Editar</button>
					</form>
					<?php 
					if (!empty($_SESSION['buscaridedit']) && $_SESSION['buscaridedit'] == "seteada") {
							echo "<script type='text/javascript'> 
							setTimeout ('mostrareditar();', 100); 
							</script>";
							$_SESSION['buscaridedit'] = "0";
						}
						if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["posttype"] == "editviaj2"){

												if (empty($_POST["lsalida"]) or empty($_POST["lllegada"]) or empty($_POST["fhsalida"]) or empty($_POST["fhllegada"]) or empty($_POST["numunidad"]) or empty($_POST["idconductor"]) or empty($_POST["costotckt"])) {
													  echo "<script>alert('Por favor rellena todos los datos.');</script>";
												  }else{
												  
												  	$id = $_POST["id"];
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
													$id = test_input($id);
													$lsalida= test_input($lsalida);
													$lllegada= test_input($lllegada);
													$fhsalida= test_input($fhsalida);
													$fhllegada= test_input($fhllegada);
													$numunidad = test_input($numunidad);
													$idconductor = test_input($idconductor);
													$costotckt = test_input($costotckt);
												
													//MySQl
													require('puzz/dbconnect.php');
														
														$sql = "UPDATE rutas 
																SET lsalida ='$lsalida', 
																	lllegada = '$lllegada', 
																	fhsalida = '$fhsalida', 
																	fhllegada = '$fhllegada', 
																	numunidad = '$numunidad', 
																	idconductor = '$idconductor',
																	costotckt = '$costotckt'
																WHERE id ='$id';";

																		if ($conn->query($sql) === TRUE) {
																		    echo "<script>alert('Felicitaciones! UPDATE Exitoso!');</script>";
																		} else {
																		    echo "Error: " . $sql . "<br>" . $conn->error;
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
			<div id="ao-boletos-administrarboletos-anadir">
				
				<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
					<h2>Vender un Boleto</h2>
					<div class="form-group">
						<input type="text" name="lsalida" placeholder="Lugar de salida" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="lllegada" placeholder="Lugar de llegada" class="form-control">
					</div>
					<div class="form-group">
						<input type="date" name="fsalida" placeholder="Fecha Salida" class="form-control">
					</div>
		
					<div class="form-group">
					<button class="btn canyshowfunc" type="button">Cancelar</button>
					<input  class="nodisplay" type="text" name="posttype" value="venderboletos1">
					<button type="submit" class="btn btn-success">Consultar viajes</button> 
					</div>
				</form>
				<!--OLD VENDERBOLETOS1.PHP -->
					<?php
						echo "<table class='table table-striped tablewhite'>";
							if (!empty($_POST['lsalida']) && $_POST['posttype'] == "venderboletos1") {

								$saliendode = $_POST['lsalida'];
								$llegandoa = $_POST['lllegada'];
								$fecha = $_POST['fsalida'];

								require('puzz/dbconnect.php');
								$sql = "SELECT * FROM rutas WHERE lsalida = '$saliendode' AND lllegada = '$llegandoa' AND date(fhsalida) = date('$fecha');";
								$result = $conn->query($sql);
												if ($result->num_rows > 0) {
													echo "<h1>Viajes de $saliendode hacia $llegandoa del la fecha $fecha</h1>";
													echo "<tr>
																<th>#</th><th>Hora de Salida</th><th>Fecha y Hora de llegada</th><th>Costo Ticket</th>
															</tr>";

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
												    echo "<tr>
																<td>$id</td><td>$date</td><td>$fhllegada</td><td>$costotckt</td>
															</tr>";
											   		 }
											   		
											   		 echo "<form action='index.php' method='POST'>
																<input type='number' name='idselected'>
																<input  class='nodisplay' type='text' name='posttype' value='venderboletos2'>
																<button type='submit' class='btn btn-success'>Seleccionar esta ruta</button> 
															</form>";
												}else {
															$_SESSION['failure'] = "No hemos podido conseguir viajes de esa fecha, intenta más tarde.";
															$_SESSION['failureshow'] = "#verphptlv";
															require('puzz/logdataerr.php');
											    
															}
												$conn->close();
							}else{
								echo "No sirve pa una mierdish";
							}
						 echo "</table>";
					?>
				<!--OLD VENDERBOLETOS2.php -->
					<?php 
						echo "<table class='table table-striped tablewhite'>";
						
							if (!empty($_POST['idselected']) && $_POST['posttype'] == "venderboletos2") {
								
								$idruta= $_POST['idselected'];


								require('puzz/dbconnect.php');
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

												    			echo "<form action='index.php' method='POST'>
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
															require('puzz/logdataerr.php');
											    
															}


												    	}
												    }else {
															$_SESSION['failure'] = "numunidad invalido.";
															$_SESSION['failureshow'] = "#verphptlv";
															require('puzz/logdataerr.php');
											    
															}
												    }
												}else {
															$_SESSION['failure'] = "Id selected invalido.";
															$_SESSION['failureshow'] = "#verphptlv";
															require('puzz/logdataerr.php');
											    
															}
												$conn->close();

							}else{
								echo "No sirve pa una mierdish";
							}
						echo "</table>";
					?>
				<!--OLD VENDERBOLETOS3.php-->
					<?php  
						if (!empty($_SESSION['collectiondata']) && count($_POST) > 1) {	
							echo "<pre>";
							print_r($_POST);	
							print_r($_SESSION['collectiondata']);
							echo "</pre>";
							echo "<br>";
							echo "<form action='index.php' method='POST'>
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
							echo "Por favor selecciona al menos un asiento! <br>";
						}
					?> 
				<!--OLD VENDERBOLETOS4.php-->
					<?php 
						if (!empty($_POST['posttype']) && $_POST['posttype'] == "venderboletos4") {
							echo "<pre>";
							print_r($_POST);
							echo "</pre>";
							$i = 1;
							
							$contardatosainsertar = count($_POST)-1;
							foreach($_POST as $key=>$value){
									if ($key == "posttype") {
										  continue;
									} else {

										echo "$key=$value<br>";
										${"campo" . $i} = $key;
										${"dato" . $i} = $value;
										$i++;
									}
							}
							$i = 1;
							$sucess = 0;
							require('puzz/dbconnect.php');

							while ($i <= $contardatosainsertar) {
								
								
								$idrviaje = $_SESSION['collectiondata'][0];
								$campo = ${"campo" . $i};
								$dato = ${"dato" . $i};

							
							$sql = "UPDATE rviajes SET $campo ='$dato' WHERE id ='$idrviaje';";
							if ($conn->query($sql) === TRUE) {
								 $sucess++;
								$i++;
							}
											else {
														echo "Error: " . $sql . "<br>" . $conn->error;
														die('Fatal error');
													}
											


										}#cerrando el while
						if ($sucess > 0) {
							echo "<script>alert('Boletos Comprados');</script>";
						}
						
						$conn->close();


						}else{
							echo "No sirve pa una mierdish";
						}
					 ?>


			</div>

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