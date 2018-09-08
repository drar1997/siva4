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
		$('#ao-viajes-listado').children(varselectfuncdos).show();
	});

	$('#ao-selectfilter-boletos2').on('change', function(){
		var varselectfuncdos = '#'+$(this).val();

		$('#ao-boletos').show();
		$('#ao-boletos').children('div').hide();
		$('#ao-boletos-administrarboletos').show();
		$('#ao-boletos-administrarboletos').children('div').hide();
		$('#ao-boletos-administrarboletos').children(varselectfuncdos).show();
	});



});