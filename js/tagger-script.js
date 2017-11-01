$(document).ready(function() {
	$('button.Enviar').click(function(event) {
		var source = $('input.source').val();
		var campaign  = $('input.campaign').val();
		var medium = $('input.medium').val();
		var codePaste = $('textarea.codePaste').val();
		var utm;

		if(source){
			utm = '?utm_source=' + source;

			if(campaign){
				utm = utm + '&utm_campaign=' + campaign;
			}

			if(medium){
				utm = utm + '&utm_medium=' + medium;
			}
		} else if(campaign){
			utm = '?utm_campaign=' + campaign;

			if(medium){
				utm = utm + '&utm_medium=' + medium;
			}
		} else if(medium){
			utm = '?utm_medium=' + medium;
		}

		$('pre.resultado').show();
		$('pre.resultado').text(codePaste);

		


	});
});