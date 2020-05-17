<?php
add_action( 'init', 'jk_remove_storefront_header_search' );
function jk_remove_storefront_header_search() {
remove_action( 'storefront_header', 'storefront_product_search', 	40 );
add_action( 'storefront_header', 'storefront_product_search', 	60 );
}
if ( ! function_exists( 'storefront_credit' ) ) {
/**
* Display the theme credit
*
* @since 1.0.0
* @return void
*/
function storefront_credit() {?>

  <div class="site-info">

      <?php echo esc_html( '&copy; ' . get_bloginfo( 'name' ) . ' ' . date( 'Y' ) ); ?>

    </div><!-- .site-info -->
  <?php
  }
}
?>
<?php
	include('shortcodes.php');
?>
