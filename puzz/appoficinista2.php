<!--Second Header 
	NOTA: clase relacionada shdr-->
<style type="text/css">
	#blankspc{
		display: none;
	}
</style>
<div class="row shdr">
	<div class="col-4 quitarpadding">
		<div class="form-group">
			<select class="form-control" id="selectfunc">
				<option value="">--Selecionar Categoría--</option>
				<option value="ao-selectfilter-viajes">Viajes</option>
				<option value="ao-selectfilter-boletos">Boletos</option>
				<option value="ao-selectviajes-vehiculos">Vehículos</option>
			</select>
		</div>
	</div>
	<div class="col-3 quitarpadding dependblank" style="text-align: left;">
			<div class="form-group" id="ao-selectfilter">
				<!--VARIOS SELECT-->

					<!--LISTADO DE VIAJES-->
					<div id="ao-selectfilter-viajes">
						<select class="form-control" id="ao-selectfilter-viajes2">
							<option value="">--Seleccionar Filtros--</option>
							<option value="ao-viajes-listado-vertodos">Todos</option>
							<option value="ao-viajes-listado-verhoy">Hoy</option>
							<option value="ao-viajes-listado-verayer">Ayer</option>
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
					<div id="ao-selectviajes-vehiculos">
						<select class="form-control" id="ao-selectviajes-vehiculos2">
							<option value="">--Seleccionar Filtros--</option>
							<option value="ao-vehiculos-administrarvehiculos-anadir">Añadir Vehículo</option>
							<option value="ao-vehiculos-administrarvehiculos-remover">Remover</option>
							<option value="ao-vehiculos-administrarvehiculos-editar">Editar</option>
						</select>
					</div>
			</div>
	</div>
	<div class="col-1"></div>
	<div class="col-1" style="text-align: center; font-size: 40px;"><a href="#filter" style=" color: black;"><i class="material-icons">filter_list</i></a></div>
	<div class="col-1" style="text-align: center; font-size: 40px;"><a href="#eviaje" onclick="document.getElementById('eviaje').style.display='block';" style=" color: black;"><i class="material-icons">edit</i></a></div>
	<div class="col-1" style="text-align: center; font-size: 40px;"><a href="#rviaje" onclick="document.getElementById('rviaje').style.display='block';" style=" color: black;"><i class="material-icons">remove</i></a></div>
	<div class="col-1" style="text-align: center; font-size: 40px;"><a href="#agviaje" onclick="document.getElementById('agviaje').style.display='block';" style=" color: black;"><i class="material-icons">add</i></a></div>
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
			<div id="ao-viajes-listado-vertodos">Ver todos</div>

			<!--VER HOY-->
			<div id="ao-viajes-listado-verhoy">Ver Hoy</div>

			<!--VER AYER-->
			<div id="ao-viajes-listado-verayer">Ver Ayer</div>

		</div>

		<!--ADMINISTRAR VIAJES-->
		<div id="ao-viajes-administrarviajes">

			<!--AÑADIR VIAJE-->
			<div id="ao-viajes-administrarviajes-anadir">Añadir Viaje</div>

			<!--REMOVER VIAJE-->
			<div id="ao-viajes-administrarviajes-remover">Remover Viaje</div>

			<!--EDITAR VIAJE-->
			<div id="ao-viajes-administrarviajes-editar">Editar Viaje</div>
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
			<div id="ao-boletos-administrarboletos-editar">Editar Boletos</div>
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
			<div id="ao-vehiculos-administrarvehiculos-editar">Editar Vehículo</div>
		</div>
	</div>
</div>