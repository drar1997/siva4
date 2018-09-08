$(document).ready(function(){
	$('#ao').children('div').hide();
		$('#selectfunc').on('change', function(){
			var varselectfunc = '#'+$(this).val();

			$('#ao').children('div').hide();
			$('#ao').children(varselectfunc).show();
		});
	});