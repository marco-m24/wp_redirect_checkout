// Global redirect to check out when hitting cart page
add_action( 'template_redirect', 'mrc_redirect_to_checkout_if_cart' );
function mrc_redirect_to_checkout_if_cart() {
	
	if ( !is_cart() ) return;

	global $woocommerce;

	if ( $woocommerce->cart->is_empty() ) {
		// If empty cart redirect to home
		wp_redirect( get_home_url(), 302 );
	} else {
		// Else redirect to check out url
		wp_redirect( wc_get_checkout_url(), 302 );
	}
	
	exit;
}
