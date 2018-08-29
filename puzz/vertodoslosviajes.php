<div id="verphptlv" style="display: none;">
	<h3>Listado de Todos los Viajes</h3>
	<table class="table table-striped">
		<tr>
			<th>#</th><th>Lugar de Salida</th><th>Lugar de Llegada</th><th>Fecha y Hora de Salida</th><th>Fecha y Hora de llegada</th><th>Número de Unidad</th><th>Id del conductor</th>
		</tr>
		<?php 
			require('puzz/dbconnect.php');
			$sql = "SELECT * FROM  rutas";
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

			    echo "<tr>
							<td>$id</td><td>$lsalida</td><td>$lllegada</td><td>$fhsalida</td><td>$fhllegada</td><td>$numunidad</td><td>$idconductor</td>
						</tr>";
		   		 }
			}else {
						$_SESSION['failure'] = "No hemos podido conseguir viajes por ahora, intenta más tarde.";
						$_SESSION['failureshow'] = "#verphptlv";
						require_once('puzz/logdataerr.php');
		    
						}
			$conn->close();
		 ?>
	</table>
	<button class="btn canyshowfunc" type="button">Cancelar</button>
</div>