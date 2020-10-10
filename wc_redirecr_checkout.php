// Skip the cart and redirect to check out url when clicking on Add to cart
add_filter ( 'woocommerce_add_to_cart_redirect', 'mrc_redirect_to_checkout' );
function mrc_redirect_to_checkout() {
    
	global $woocommerce;

	// Remove the default `Added to cart` message
	wc_clear_notices();

	return wc_get_checkout_url();
	
}
