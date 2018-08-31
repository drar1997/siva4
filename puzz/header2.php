<style type="text/css">
		header{
			font-family: 'Marcellus SC', serif; 
			width: 100%;
			background: #CF0E16;
			height: 50px;
			color: #F0F0F0;
			line-height: 50px;
			overflow: hidden;
			
		}
		header h1{
			text-align: center;
			font-family: 'Marcellus SC', serif; 
			color: white;
			font-size: 45px;
		}
		header div div div.hdr-containerflex{
			display: flex;
			justify-content: center;
			align-content: center;		}
		header div div div i.hdr-flexitem{
			font-size: 40px; 
			line-height: 50px;
		}
		

		@media only screen and (max-width: 450px){
			header h1{
				font-size: 25px;
				line-height: 50px;
			}
			header div div div i.hdr-flexitem{
				font-size: 25px;
				line-height: 50px;
			}
			header div div div div.hdr-bigscr{
				display: none;
			}
		}
		@media only screen and (max-width: 950px) and (min-width: 451px){
			header h1{
				font-size: 35px;
				line-height: 50px;
			}
			header div div div i.hdr-flexitem{
				font-size: 35px;
				line-height: 50px;
			}
			header div div div div.hdr-bigscr{
				display: none;
			}
		}
	</style>
	<header>
	<div class="row" style="margin-left: 0px;">
		<div class="col-2" style="height: 50px;">
			<div class="hdr-containerflex">
					<i class="fa fa-navicon hdr-flexitem"></i>
			</div>
		</div>
		<div class="col-7" style="height: 50px;">
			<a href="index.php" style="text-decoration: none;"><h1>COOPTMOTILON</h1></a>
			
		</div>
		<div class="col-3" style="height: 50px;">
			<div class="hdr-containerflex">
					<div class="hdr-flexitem hdr-bigscr" style="font-size: 14px; margin-right: 10px;">
						<?php 
							if (!empty($_SESSION['name'])) {
								require_once('puzz/log1true.php');
							}else{
								echo 
								"<a id='but1' onclick=" . '"document.getElementById(' . "'logform').style.display='block'; document.getElementById('regform').style.display=" . "'none';" . '"' . ">Iniciar Sesión</a>";
							}

						 ?>
					</div>
					<div class="hdr-flexitem hdr-bigscr" style="font-size: 14px; margin-right: 10px;">
						<?php 
							if (!empty($_SESSION['name'])) {
								echo "<a href='puzz/closesession.php' id='cslink'>Cerrar Sesión</a>";
							}else{
								echo 
								"<a id='but2' onclick=" . '"document.getElementById(' . "'regform').style.display='block'; document.getElementById('logform').style.display=" . "'none';" . '"' . ">Registrarse</a>";
							}

						 ?>
					</div>
					<i class="fa fa-user-circle hdr-flexitem"></i>
			</div>
		</div>
	</div>
	</header>