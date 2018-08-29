<script>
	$(document).ready(function(){
		$("#verphptlv").hide(),
	 	$("#vtlv").click(function(){
	 		$("#grandmafkr").hide();
	 		$("#verphptlv").show();
	 	});
	    $("#agviaj").click(function(){
	    	$("#grandmafkr").hide();
	 		$("#agviaje").show();
	    });
	    $("#regvehi").click(function(){
	 		$("#grandmafkr").hide();
	 		$("#regcar").show();
	 	});
	    $(".canyshowfunc").click(function(){
	    	$("#regcar").hide();
	    	$("#agviaje").hide();
	    	$("#verphptlv").hide();
	    	$("#grandmafkr").show();
	    });
	});
</script>
<div id="grandmafkr">
<div class="row">
	<div class="col-md-4 madafkr">
		<a href="#">
			<div class="optboxs" id="vtlv">
				<div class="imgttt">
					<img src="img/rutas.jpg" class="rounded mx-auto d-block img-fluid">
				</div>
				<div class="textdivaa">
				<h3 style="text-align: center;">Ver todos los Viajes</h3>
				</div>
			</div>
		</a>
	</div>
	<div class="col-md-4 madafkr">
		<a href="#">
			<div class="optboxs"  id="agviaj">
				<div class="imgttt">
					<img src="img/road.png" class="rounded mx-auto d-block img-fluid">
				</div>
				<div class="textdivaa">
				<h3 style="text-align: center;">Agendar Viaje</h3>
				</div>
			</div>
		</a>
	</div>
	<div class="col-md-4 madafkr">
		<a href="#">
			<div class="optboxs" id="regvehi">
				<div class="imgttt">
					<img src="img/bus.jpg" class="rounded mx-auto d-block img-fluid">
				</div>
				<div class="textdivaa">
				<h3 style="text-align: center;">Registrar Vehículo</h3>
				</div>
			</div>
		</a>
	</div>
</div>
</div>
<?php 
	require_once('puzz/crearvehiculo.php');
	require_once('puzz/agendarviaje.php');
	require_once('puzz/vertodoslosviajes.php');
 ?>