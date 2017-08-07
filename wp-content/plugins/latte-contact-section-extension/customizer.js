( function( $ ) {

	// Contact Section > Settings > Section Title
	wp.customize( 'latte_contact_title', function( value ) {
		value.bind( function( newval ) {
			$('.contact .contact-header h2').text( newval );
		} );
	} );

	// Contact Section > Settings > Section Subtitle
	wp.customize( 'latte_contact_subtitle', function( value ) {
		value.bind( function( newval ) {
			$('.contact .contact-header h3').text( newval );
		} );
	} );

	// Contact Section > Colors > Background Color
	wp.customize( 'latte_contact_background_color', function( value ) {
		value.bind( function( newval ) {
			$('.contact').css( 'background', newval );
		} );
	} );
	
} )( jQuery );