<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<style>
	img[src*="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"] {
	    display: none;
	}
	</style>
	<?php 
	require_once('puzz/head.php');
	 ?>
</head>
<body>
	<div class="cargandoo"></div>

	<?php 
	require_once('puzz/header2.php');
	 ?>
	<section>
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
						        require_once('puzz/appoficinista2.php');
						        break;
						    case "conductor":
						        require_once('puzz/appconductor.php');
						        break;
						    default:
						        echo "There is an issue with your account, please contact our tech department.";
						}
				}else{
					require_once('puzz/guest.php');
				}
			?>
		</div>
		<div style="display: none;" id="logform" >
		 	<?php require_once('puzz/login.php'); ?>
		 </div>
		<div id="regform" style="display: none;" >
		 	<?php require_once('puzz/signup.php'); ?>
		 </div>
		 <p style="text-align: center; color: grey; font-family: Raleway, sans-serif; font-size: 60px; margin-top: 300px;">Estás listo para viajar?</p>
	 </section>
</body>
</html>