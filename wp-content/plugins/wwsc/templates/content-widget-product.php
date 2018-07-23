<?php
/**
 * The template for displaying product widget entries.
 * Filtering happens at template level due too Woocommerce Query limitations.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

//Display all products by default before rules apply.
if ( Wwsc::wwsc_filter_products_visibility( true ) ) :
?>
<li>

	<a href="<?php echo esc_url( $product->get_permalink() ); ?>">
		<span class="product-title"><?php echo esc_html( $product->get_name() ); ?></span>
	</a>

	<?php echo $product->get_price_html(); // @codingStandardsIgnoreLine ?> 
	<?php
	echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
		sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
			esc_url( $product->add_to_cart_url() ),
			esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
			esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
			isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
			esc_html( $product->add_to_cart_text() )
		),
	$product, $args );
	?>

</li>
<?php endif; ?>
