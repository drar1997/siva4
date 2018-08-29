<div id="login" style="padding-left: 8%; padding-right: 8%;">
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<h2>Inicia Sesión</h2>
	<div class="form-group">
		<input type="email" name="email" placeholder="Correo electrónico" class="form-control">
	</div>
	<div class="form-group">
		<input type="password" name="password" placeholder="Contraseña" class="form-control">
	</div>
	<div class="form-group">
	<button class="btn" type="button" id="cancelarlog">Cancelar</button>
	<input type="text" name="posttype" value="loginp" style="display: none;">
	<button type="submit" class="btn btn-success">Acceder</button> 
	</div>
</form></div>
<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["posttype"] == "loginp"){
		if (empty($_POST["email"]) or empty($_POST["password"])) {
				  $_SESSION['failure'] = "Por favor rellena todos los datos.";
				  $_SESSION['failureshow'] = "#logform";

					require_once('puzz/logdataerr.php');
			  }else{
		$email = $_POST["email"];
		$password = $_POST["password"];
		function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
		$email= test_input($email);
		$password= test_input($password);
		$password= hash('sha512',$password);
		

		require_once('puzz/dbconnect.php');

		$sql = "SELECT * FROM  clientes WHERE email = '$email' AND password = '$password'";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
  				
			while($row = $result->fetch_assoc()) {
		        
		    $_SESSION['id'] = $row["id"];
		    $_SESSION['email'] = $row["email"];
		    $_SESSION['password'] = $row["password"];
		    $_SESSION['name'] = $row["name"];
		    $_SESSION['lastname'] = $row["lastname"];
		    $_SESSION['usertype'] = "viajero";
		    header ("Location: index.php");

		    }
		} else {
			$sql = "SELECT * FROM  oficinistas WHERE email = '$email' AND password = '$password'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
  				
				while($row = $result->fetch_assoc()) {
		        
		        $_SESSION['id'] = $row["id"];
		        $_SESSION['email'] = $row["email"];
		        $_SESSION['password'] = $row["password"];
		        $_SESSION['name'] = $row["name"];
		        $_SESSION['lastname'] = $row["lastname"];
		        $_SESSION['usertype'] = "oficinista";
		        header ("Location: index.php");
		      
		    	}
		    } else {
		    		$sql = "SELECT * FROM  conductores WHERE email = '$email' AND password = '$password'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
		  				
						while($row = $result->fetch_assoc()) {
				        
				        $_SESSION['id'] = $row["id"];
				        $_SESSION['email'] = $row["email"];
				        $_SESSION['password'] = $row["password"];
				        $_SESSION['name'] = $row["name"];
				        $_SESSION['lastname'] = $row["lastname"];
				        $_SESSION['usertype'] = "conductor";
				        header ("Location: index.php");
				        
				    	}         
				    } else {
						$_SESSION['failure'] = "El usuario y/o la contraseña no concuerdan con nuestros registros, por favor verifica que los hayas escrito correctamente e intenta de nuevo.";
						$_SESSION['failureshow'] = "#logform";
						require_once('puzz/logdataerr.php');
		    
						}}}

		$conn->close();}}
?>