<div class="prtprt" style="padding-left: 8%; padding-right: 8%" >
	<h2>Elige el tipo de cuenta:</h2>
	<div class="row">
		<button id="viajerobtn" type="button" class="btn btn-success col-4">Viajero</button>
		<button id="oficinistabtn" type="button" class="btn col-4">Oficinista</button>
		<button id="conductorbtn" type="button" class="btn col-4">Conductor</button>
	</div>
</div>
<!--Javascript para mostrar ocultar formularios y botones preregtype-->
<script>
$(document).ready(function(){
 	$("#viajerobtn").click(function(){
 		$("#formregclient").toggle(1000);
 		$("#formregofi").hide();
 		$("#formregdriver").hide();
 	});
    $("#cancelar1").click(function(){
    	$("#formregclient").hide();
    });
    $("#oficinistabtn").click(function(){
 		$("#formregofi").toggle(1000);
 		$("#formregclient").hide();
 		$("#formregdriver").hide();
 	});
    $("#cancelar2").click(function(){
    	$("#formregofi").hide();
    });
    $("#conductorbtn").click(function(){
 		$("#formregdriver").toggle(1000);
 		$("#formregclient").hide();
 		$("#formregofi").hide();
 	});
    $("#cancelar3").click(function(){
    	$("#formregdriver").hide();
    });
});
</script>
<div id="formregclient" style="padding-left: 8%; padding-right: 8%; display: none">
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<h2>Regístrate como viajero</h2>
	<div class="form-group">
		<input type="email" name="email" placeholder="Correo electrónico" class="form-control">
	</div>
	<div class="form-group">
		<input type="password" name="password" placeholder="Contraseña" class="form-control">
	</div>
	<div class="form-group">
		<input type="text" name="name" placeholder="Primer Nombre" class="form-control">
	</div>
	<div class="form-group">
		<input type="text" name="lname" placeholder="Primer Apellido" class="form-control">
	</div>
	<div class="form-group">
	  <label for="sel1">Tipo de documento de identidad:</label>
	  <select class="form-control" id="sel1" name="tdoc">
	    <option>C.C.</option>
	    <option>C.E.</option>
	    <option>Pasaporte</option>
	    <option>P.E.P.</option>
	  </select>
	</div>
	<div class="form-group">
	<input type="number" name="numdoc" min="1000" placeholder="Número de documento" class="form-control">
	</div>
	<div class="form-group">
	<input type="number" name="numcel" min="1000" placeholder="Número de Celular" class="form-control">
	</div>
	Género: 
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="gender" value="Hombre">Hombre
	  </label>
	</div>
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="gender" value="Mujer">Mujer
	  </label>
	</div>
	<br>
	<div class="form-group">
	<button class="btn" type="button" id="cancelar1">Cancelar</button>
	<input type="text" name="posttype" value="regclient" style="display: none;">
	<button type="submit" class="btn btn-success">Registrar</button> 
	</div>
</form></div>
<div id="formregofi" style="padding-left: 8%; padding-right: 8%; display: none">
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<h2>Regístrate como Oficinista de Cooptmotilon</h2>
	<div class="form-group">
		<input type="text" name="ltrab" placeholder="Lugar de Trabajo" class="form-control">
	</div>
	<div class="form-group">
		<input type="text" name="name" placeholder="Primer Nombre" class="form-control">
	</div>
	<div class="form-group">
		<input type="text" name="lname" placeholder="Primer Apellido" class="form-control">
	</div>
	<div class="form-group">
	  <label for="sel1">Tipo de documento de identidad:</label>
	  <select class="form-control" id="sel2" name="tdoc">
	    <option>C.C.</option>
	    <option>C.E.</option>
	    <option>Pasaporte</option>
	    <option>P.E.P.</option>
	  </select>
	</div>
	<div class="form-group">
	<input type="number" name="numdoc" min="1000" placeholder="Número de documento" class="form-control">
	</div>
	<div class="form-group">
	<input type="number" name="numcel" min="1000" placeholder="Número de Celular" class="form-control">
	</div>
	<div class="form-group">
		<input type="email" name="email" placeholder="Correo electrónico" class="form-control">
	</div>
	<div class="form-group">
		<input type="password" name="password" placeholder="Contraseña" class="form-control">
	</div>
	Género: 
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="gender" value="Hombre">Hombre
	  </label>
	</div>
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="gender" value="Mujer">Mujer
	  </label>
	</div>
	<br>
	<div class="form-group">
	<button class="btn" type="button" id="cancelar2">Cancelar</button>
	<input type="text" name="posttype" value="regofi" style="display: none;">
	<button type="submit" class="btn btn-success">Registrar</button> 
	</div>
</form></div>
<div id="formregdriver" style="padding-left: 8%; padding-right: 8%; display: none">
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<h2>Regístrate como Conductor de Cooptmotilon</h2>
	<div class="form-group">
		<input type="text" name="cityres" placeholder="Ciudad de residencia" class="form-control">
	</div>
	<div class="form-group">
		<input type="text" name="name" placeholder="Primer Nombre" class="form-control">
	</div>
	<div class="form-group">
		<input type="text" name="lname" placeholder="Primer Apellido" class="form-control">
	</div>
	<div class="form-group">
	  <label for="sel1">Tipo de documento de identidad:</label>
	  <select class="form-control" id="sel3" name="tdoc">
	    <option>C.C.</option>
	    <option>C.E.</option>
	    <option>Pasaporte</option>
	    <option>P.E.P.</option>
	  </select>
	</div>
	<div class="form-group">
	<input type="number" name="numdoc" min="1000" placeholder="Número de documento" class="form-control">
	</div>
	<div class="form-group">
	<input type="number" name="numcel" min="1000" placeholder="Número de Celular" class="form-control">
	</div>
	<div class="form-group">
		<input type="email" name="email" placeholder="Correo electrónico" class="form-control">
	</div>
	<div class="form-group">
		<input type="password" name="password" placeholder="Contraseña" class="form-control">
	</div>
	Género: 
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="gender" value="Hombre">Hombre
	  </label>
	</div>
	<div class="form-check-inline">
	  <label class="form-check-label">
	    <input type="radio" class="form-check-input" name="gender" value="Mujer">Mujer
	  </label>
	</div>
	<br>
	<div class="form-group">
	<button class="btn" type="button" id="cancelar3">Cancelar</button>
	<input type="text" name="posttype" value="regdriver" style="display: none;">
	<button type="submit" class="btn btn-success">Registrar</button> 
	</div>
</form></div>
<?php
	//PROCESO DE REGISTRO PARA CLIENTES
	if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["posttype"] == "regclient"){

			if (empty($_POST["email"]) or empty($_POST["password"]) or empty($_POST["name"]) or empty($_POST["lname"]) or empty($_POST["tdoc"]) or empty($_POST["numdoc"]) or empty($_POST["numcel"]) or empty($_POST["gender"])) {
				  echo "<script>alert('Por favor rellena todos los datos.');</script>";
			  }else{

				$email = $_POST["email"];
				$password = $_POST["password"];
				$name = $_POST["name"];
				$lname = $_POST["lname"];
				$tdoc = $_POST["tdoc"];
				$numdoc = $_POST["numdoc"];
				$numcel = $_POST["numcel"];
				$gender = $_POST["gender"];
				
				function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					  return $data;
					}

				$email= test_input($email);
				$password= test_input($password);
				$password= hash('sha512',$password);
				$name= test_input($name);
				$lname= test_input($lname);
				$tdoc = test_input($tdoc);
				$numdoc = test_input($numdoc);
				$numcel = test_input($numcel);
				$gender = test_input($gender);

				//MySQl
				require_once('puzz/dbconnect.php');
				//checkar if the email exists
				$sql = "SELECT * FROM  clientes WHERE email = '$email'";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
					  				
									$_SESSION['failure'] = "Ese correo electrónico ya tiene una cuenta con nosotros, si es tu correo por favor inicia sesión, de lo contrario please try with a different email.";
									header ("Location: index.php");
							    
							} else {
								   $sqll = "INSERT INTO clientes (email, password, name, lname, tdoc, numdoc, numcel, gender)
									VALUES ('$email', '$password', '$name', '$lname', '$tdoc', '$numdoc', '$numcel', '$gender')";

									if ($conn->query($sqll) === TRUE) {
									    echo "<script>alert('Felicitaciones! Registro Exitoso!');</script>";
									} else {
									    echo "Error: " . $sqll . "<br>" . $conn->error;
									}

							}

				
				$conn->close();}}
	//PROCESO DE REGISTRO PARA CONDUCTORES
		if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["posttype"] == "regdriver"){

			if (empty($_POST["cityres"]) or empty($_POST["email"]) or empty($_POST["password"]) or empty($_POST["name"]) or empty($_POST["lname"]) or empty($_POST["tdoc"]) or empty($_POST["numdoc"]) or empty($_POST["numcel"]) or empty($_POST["gender"])) {
				  echo "<script>alert('Por favor rellena todos los datos.');</script>";
			  }else{
			  	$cityres = $_POST["cityres"];
				$email = $_POST["email"];
				$password = $_POST["password"];
				$name = $_POST["name"];
				$lname = $_POST["lname"];
				$tdoc = $_POST["tdoc"];
				$numdoc = $_POST["numdoc"];
				$numcel = $_POST["numcel"];
				$gender = $_POST["gender"];
				
				function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					  return $data;
					}
				$cityres= test_input($cityres);
				$email= test_input($email);
				$password= test_input($password);
				$password= hash('sha512',$password);
				$name= test_input($name);
				$lname= test_input($lname);
				$tdoc = test_input($tdoc);
				$numdoc = test_input($numdoc);
				$numcel = test_input($numcel);
				$gender = test_input($gender);

				//MySQl
				require_once('puzz/dbconnect.php');
				//checkar if the email exists
				$sql = "SELECT * FROM  conductores WHERE email = '$email'";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
					  				
									$_SESSION['failure'] = "Ese correo electrónico ya tiene una cuenta con nosotros, si es tu correo por favor inicia sesión, de lo contrario please try with a different email.";
									header ("Location: index.php");
							    
							} else {
								   $sqll = "INSERT INTO conductores (cityres, name, lname, tdoc, numdoc, numcel, email, password, gender)
									VALUES ('$cityres', '$name', '$lname', '$tdoc', '$numdoc', '$numcel', '$email', '$password', '$gender')";

									if ($conn->query($sqll) === TRUE) {
									    echo "<script>alert('Felicitaciones! Registro Exitoso!');</script>";
									} else {
									    echo "Error: " . $sqll . "<br>" . $conn->error;
									}

							}

				
				$conn->close();}}
		//PROCESO DE REGISTRO PARA OFICINISTAS
		if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["posttype"] == "regofi"){

			if (empty($_POST["ltrab"]) or empty($_POST["email"]) or empty($_POST["password"]) or empty($_POST["name"]) or empty($_POST["lname"]) or empty($_POST["tdoc"]) or empty($_POST["numdoc"]) or empty($_POST["numcel"]) or empty($_POST["gender"])) {
				  echo "<script>alert('Por favor rellena todos los datos.');</script>";
			  }else{
			  	$ltrab = $_POST["ltrab"];
				$email = $_POST["email"];
				$password = $_POST["password"];
				$name = $_POST["name"];
				$lname = $_POST["lname"];
				$tdoc = $_POST["tdoc"];
				$numdoc = $_POST["numdoc"];
				$numcel = $_POST["numcel"];
				$gender = $_POST["gender"];
				
				function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					  return $data;
					}
				$ltrab= test_input($ltrab);
				$email= test_input($email);
				$password= test_input($password);
				$password= hash('sha512',$password);
				$name= test_input($name);
				$lname= test_input($lname);
				$tdoc = test_input($tdoc);
				$numdoc = test_input($numdoc);
				$numcel = test_input($numcel);
				$gender = test_input($gender);

				//MySQl
				require_once('puzz/dbconnect.php');
				//checkar if the email exists
				$sql = "SELECT * FROM  oficinistas WHERE email = '$email'";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
					  				
									$_SESSION['failure'] = "Ese correo electrónico ya tiene una cuenta con nosotros, si es tu correo por favor inicia sesión, de lo contrario please try with a different email.";
									header ("Location: index.php");
							    
							} else {
								   $sqll = "INSERT INTO oficinistas (ltrab, name, lname, tdoc, numdoc, numcel, email, password, gender)
									VALUES ('$ltrab', '$name', '$lname', '$tdoc', '$numdoc', '$numcel', '$email', '$password', '$gender')";

									if ($conn->query($sqll) === TRUE) {
									    echo "<script>alert('Felicitaciones! Registro Exitoso!');</script>";
									} else {
									    echo "Error: " . $sqll . "<br>" . $conn->error;
									}

							}

				
				$conn->close();}}

	?>