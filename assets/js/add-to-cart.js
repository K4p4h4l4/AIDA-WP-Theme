function rudrAddToCart( product_id, quantity = 1 ) {

	// let's check is add-to-cart.min.js is enqueued and parameters are presented
	if ( 'undefined' === typeof wc_add_to_cart_params ) {
		return false;
	}

	jQuery.post( 
		wc_add_to_cart_params.wc_ajax_url.toString().replace( '%%endpoint%%', 'add_to_cart' ), 
		{
			product_id: product_id, 
			quantity: quantity, // quantity is hardcoced her
		}, 
		function( response ) {
			if ( ! response ) {
				return;
			}
			// redirect is optional and it depends on what is set in WooCommerce configuration
			if ( response.error && response.product_url ) {
				window.location = response.product_url;
				return;
			}
			if ( 'yes' === wc_add_to_cart_params.cart_redirect_after_add ) {
				window.location = wc_add_to_cart_params.cart_url;
				return;
			}
			// refresh cart fragments etc
			jQuery( document.body ).trigger( 'added_to_cart', [ response.fragments, response.cart_hash ] );
            window.location.reload();
		}
	);
}