<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<?php 
	require_once('puzz/head.php');
	 ?>
</head>
<body>
	<?php 
	require_once('puzz/header2.php');
	 ?>
	<section>
		<div style="width: 100%; height: 10px;"></div>
		 <!--EMPIEZA LA APP-->
		<div id="appstart">
			<?php 
				if (!empty($_SESSION['usertype'])) {
					$usert = $_SESSION['usertype'];

						switch ($usert) {
						    case "viajero":
						        require_once('puzz/appviajero.php');
						        break;
						    case "oficinista":
						        require_once('puzz/appoficinista.php');
						        break;
						    case "conductor":
						        require_once('puzz/appconductor.php');
						        break;
						    default:
						        echo "There is an issue with your account please contact our tech department.";
						}
				}
			?>
		</div>
		<div style="display: none;" id="logform" >
		 	<?php require_once('puzz/login.php'); ?>
		 </div>
		<div id="regform" style="display: none;" >
		 	<?php require_once('puzz/signup.php'); ?>
		 </div>
	 </section>
</body>
</html>