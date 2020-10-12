// Empty cart each time you click on add cart to avoid multiple element selected
add_action( 'woocommerce_add_cart_item_data', 'mrc_clear_cart', 0 );
function mrc_clear_cart () {
	global $woocommerce;
	$woocommerce->cart->empty_cart();
}
