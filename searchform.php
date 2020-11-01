<?php
/**
 * Template for displaying search forms
 */

?>

<?php //$unique_id = esc_attr( twentyseventeen_unique_id( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'tk_custom_theme' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
		<!-- <button type="submit" class="search-submit"><span class="screen-reader-text"><?php // echo _x( 'OK', 'submit button', 'tk_custom_theme' ); ?></span></button> -->
	</label>
</form>
