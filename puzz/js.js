$(window).on('load', function () {
		      jQuery(".cargandoo").fadeOut(500);
		 });

function aoviajesmostrareditar() {
		$('#ao').children('div').show();
		$('#ao-selectfilter').children('div').show();
		$('#ao').children('div').hide();
		$('#ao-selectfilter').children('div').hide();
		$('#ao-viajes').show();
		$('#ao-viajes').children('div').hide();
		$('#ao-viajes-listado').show();
		$('#ao-viajes-listado').children('div').hide();
		$('#ao-viajes-administrarviajes').show();
		$('#ao-viajes-administrarviajes').children('div').hide();
		$('#ao-viajes-administrarviajes-editar').show();
	};

function aoboletosmostrarvenderboletos1() {
		$('#ao').children('div').show();
		$('#ao-selectfilter').children('div').show();
		$('#ao').children('div').hide();
		$('#ao-selectfilter').children('div').hide();
		$('#ao-boletos').show();
		$('#ao-boletos').children('div').hide();
		$('#ao-boletos-administrarboletos').show();
		$('#ao-boletos-administrarboletos').children('div').hide();
		$('#ao-boletos-administrarboletos-anadir').show();
		$('#aostep1').hide();
	};

function aoboletosmostrarvenderboletos2() {
		$('#ao').children('div').show();
		$('#ao-selectfilter').children('div').show();
		$('#ao').children('div').hide();
		$('#ao-selectfilter').children('div').hide();
		$('#ao-boletos').show();
		$('#ao-boletos').children('div').hide();
		$('#ao-boletos-administrarboletos').show();
		$('#ao-boletos-administrarboletos').children('div').hide();
		$('#ao-boletos-administrarboletos-anadir').show();
		$('#aostep1').hide();
		$('#aostep2').hide();
	};

function aoboletosmostrarvenderboletos3() {
		$('#ao').children('div').show();
		$('#ao-selectfilter').children('div').show();
		$('#ao').children('div').hide();
		$('#ao-selectfilter').children('div').hide();
		$('#ao-boletos').show();
		$('#ao-boletos').children('div').hide();
		$('#ao-boletos-administrarboletos').show();
		$('#ao-boletos-administrarboletos').children('div').hide();
		$('#ao-boletos-administrarboletos-anadir').show();
		$('#aostep1').hide();
		$('#aostep2').hide();
		$('#aostep3').hide();
	};
function aoboletosmostrarvenderboletos4() {
		$('#ao').children('div').show();
		$('#ao-selectfilter').children('div').show();
		$('#ao').children('div').hide();
		$('#ao-selectfilter').children('div').hide();
		$('#ao-boletos').show();
		$('#ao-boletos').children('div').hide();
		$('#ao-boletos-administrarboletos').show();
		$('#ao-boletos-administrarboletos').children('div').hide();
		$('#ao-boletos-administrarboletos-anadir').show();
		$('#aostep1').hide();
		$('#aostep2').hide();
		$('#aostep3').hide();
		$('#aostep4').hide();
	};


$(document).ready(function(){
	$('#ao').children('div').hide();
	$('#ao-selectfilter').children('div').hide();

	$('#selectfunc').on('change', function(){
		var varselectfunc = '#'+$(this).val();

		$('#ao').children('div').hide();
		$('#ao-selectfilter').children('div').hide();
		$(varselectfunc).show();
	});

	$('#ao-selectfilter-viajes2').on('change', function(){
		var varselectfuncdos = '#'+$(this).val();

		$('#ao-viajes').show();
		$('#ao-viajes').children('div').hide();
		$('#ao-viajes-listado').show();
		$('#ao-viajes-listado').children('div').hide();
		$('#ao-viajes-administrarviajes').show();
		$('#ao-viajes-administrarviajes').children('div').hide();
		$(varselectfuncdos).show();
	});

	$('#ao-selectfilter-boletos2').on('change', function(){
		var varselectfunctres = '#'+$(this).val();

		$('#ao-boletos').show();
		$('#ao-boletos').children('div').hide();
		$('#ao-boletos-administrarboletos').show();
		$('#ao-boletos-administrarboletos').children('div').hide();
		$('#ao-boletos-administrarboletos').children(varselectfunctres).show();
	});

	$('#ao-selectfilter-vehiculos2').on('change', function(){
		var varselectfunccuatro = '#'+$(this).val();

		$('#ao-vehiculos').show();
		$('#ao-vehiculos').children('div').hide();
		$('#ao-vehiculos-administrarvehiculos').show();
		$('#ao-vehiculos-administrarvehiculos').children('div').hide();
		$('#ao-vehiculos-administrarvehiculos').children(varselectfunccuatro).show();
	});

	
});

