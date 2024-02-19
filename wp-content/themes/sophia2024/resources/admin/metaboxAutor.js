/**
 * Handle the custom post type nav menu meta box
 */
jQuery( document ).ready( function($) {
	$( '#submit-author-archives' ).click( function( event ) {
		event.preventDefault();
		
		var $hptal_list_items = $( '#' + aalm_obj.metabox_list_id + ' li :checked' );
		var $hptal_submit = $( 'input#submit-author-archives' );

		// Get checked boxes
		var autor_ids = [];
		$hptal_list_items.each( function() {
			autor_ids.push( $( this ).val() );
		} );
		
		// Show spinner
		$( '#' + aalm_obj.metabox_id ).find('.spinner').show();
		
		// Disable button
		//$hptal_submit.prop( 'disabled', true );

		// Send checked post types with our action, and nonce
		$.post( aalm_obj.ajaxurl, {
				action: aalm_obj.action,
				posttypearchive_nonce: aalm_obj.nonce,
				autor_ids: autor_ids,
				nonce: aalm_obj.nonce
			},

			// AJAX returns html to add to the menu, hide spinner, remove checks
			function( response ) {
				$( '#menu-to-edit' ).append( response );
				$( '#' + aalm_obj.metabox_id ).find('.spinner').hide();
				$hptal_list_items.prop("checked", false);
				$hptal_submit.prop( 'disabled', false );
			}
		);
	} );
} );
