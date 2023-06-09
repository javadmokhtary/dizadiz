<?php
/**
 * The searchform.php template.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 */

$dizadiz_theme_unique_id = wp_unique_id( 'search-form-' );
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $dizadiz_theme_unique_id ); ?>">
		<?php esc_html_e( 'Search', 'dizadiz' ); ?>
	</label>
	<input type="search" id="<?php echo esc_attr( $dizadiz_theme_unique_id ); ?>" class="search-field" value="<?php echo get_search_query(); ?>" name="s" />
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'dizadiz' ); ?>" />
</form>
