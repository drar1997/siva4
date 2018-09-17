<header style="overflow: hidden;">
	<div class="row">
		<div class="col-md-4">
				<a href="index.php"><h1 id="tgeneral">TRANSPORTE</h1></a>
		</div>
		<div class="col-md-4">
		</div>
		<div class="col-md-2" style="line-height: 3rem; text-align: center; color: #f0f0f0;">
			<?php 
				if (!empty($_SESSION['name'])) {
					echo "Bienvenido " . $_SESSION['name'] . "!";
				}else{
					echo 
					"<a id='but1' onclick=" . '"document.getElementById(' . "'logform').style.display='block'; document.getElementById('regform').style.display=" . "'none';" . '"' . ">Iniciar Sesión</a>";
				}

			 ?>
				
		</div>

		<div class="col-md-2" style="line-height: 3rem; text-align: center; color: #f0f0f0;">
			<?php 
				if (!empty($_SESSION['name'])) {
					echo "<a href='puzz/closesession.php' id='cslink'>Cerrar Sesión</a>";
				}else{
					echo 
					"<a id='but2' onclick=" . '"document.getElementById(' . "'regform').style.display='block'; document.getElementById('logform').style.display=" . "'none';" . '"' . ">Registrarse</a>";
				}

			 ?>
				
		</div>
	</div>
</header>
