var $ = jQuery;

$(function() {

	function show_reset() {

		$( '.reset' ).addClass( 'show' );

		$.each( inputs, function() {
			$( this ).unbind( 'input' );
		});

	}

	$( 'input[data-default-color]' ).wpColorPicker({

		palettes: false,
		hide: true,
		change: show_reset

	});

	var inputs = $( '.curtain' ).find( 'input, select, textarea' ).not( ':hidden' );

	inputs.on( 'input', show_reset );

});